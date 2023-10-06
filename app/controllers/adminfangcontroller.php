<?php 
require_once __DIR__ . '/../services/adminfangservice.php';
require_once __DIR__ . '/../services/adminservice.php';

class AdminfangController{
    
    private $adminFangService;
    private $adminService;
    function __construct(){
        $this->adminService = new AdminService();
        $this->adminFangService = new AdminfangService();
    }
    public function checkIfLoggedIn(){
        $admin = $this->adminService->checkIfLoggedIn();
        if($admin == null){
            echo "<script>window.location.replace('/admin/loadLoginView');</script>";
            die();
        }
    }
    public function editFangTypesView(){
        $this->checkIfLoggedIn();

        $fangId = htmlspecialchars($_POST['id']);
        $fang = $this->adminFangService->getFangTypeById($fangId);
        require __DIR__ . '/../views/fang/editFangType.php';
    }

    public function updateFang(){
        $this->checkIfLoggedIn();

        $fangId = htmlspecialchars($_POST['id']);
        $fangType = htmlspecialchars($_POST['fangType']);
        $fangCommonName = htmlspecialchars($_POST['fangCommonName']);
        $fangDescription = htmlspecialchars($_POST['description']);


        if($this->adminFangService->validateFangInput($fangType, $fangCommonName, $fangDescription)){
            $this->adminFangService->updateFang($fangId, $fangType, $fangCommonName, $fangDescription);
            echo "<script>window.location.replace('/fang');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }
    }

    public function deleteFangTypes(){
        $this->checkIfLoggedIn();

        $id = htmlspecialchars($_POST['id']);
        $this->adminFangService->deleteFangType($id);
        echo "<script>window.location.replace('/fang');</script>";
    }

    public function addFangTypeView(){
        $this->checkIfLoggedIn();

        require __DIR__ . '/../views/fang/addFangType.php';
    }

    public function addFangType(){
        $this->checkIfLoggedIn();

        $fangType = htmlspecialchars($_POST['fangType']);
        $fangCommonName = htmlspecialchars($_POST['fangCommonName']);
        $description = htmlspecialchars($_POST['description']);

        if($this->adminFangService->validateFangInput($fangType, $fangCommonName, $description)){
            $this->adminFangService->addFangType($fangType, $fangCommonName, $description);
            echo "<script>window.location.replace('/fang');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }



        echo "<script>window.location.replace('/fang');</script>";
    }
}


?>