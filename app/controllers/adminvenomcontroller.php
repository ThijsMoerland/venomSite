<?php 
require_once __DIR__ . '/../services/adminservice.php';

class AdminvenomController{
    
    private $adminService;
    function __construct(){
        $this->adminService = new AdminService();
    }
    public function checkIfLoggedIn(){
        $admin = $this->adminService->checkIfLoggedIn();
        if($admin == null){
            echo "<script>window.location.replace('/admin/loadLoginView');</script>";
            die();
        }
    }
    // public function editVenomTypesView(){
    //     $this->checkIfLoggedIn();

    //     $fangId = htmlspecialchars($_POST['id']);
    //     $fang = $this->adminService->getFangTypeById($fangId);
    //     require __DIR__ . '/../views/venom/editVenom.php';
    // }

    // public function updateVenom(){
    //     $this->checkIfLoggedIn();

    //     $fangId = htmlspecialchars($_POST['id']);
    //     $fangType = htmlspecialchars($_POST['fangType']);
    //     $fangCommonName = htmlspecialchars($_POST['fangCommonName']);
    //     $fangDescription = htmlspecialchars($_POST['description']);


    //     if($this->adminService->validateFangInput($fangType, $fangCommonName, $fangDescription)){
    //         $this->adminService->updateFang($fangId, $fangType, $fangCommonName, $fangDescription);
    //         echo "<script>window.location.replace('/fang');</script>";
    //     } else {
    //         echo "<script>alert('Something went wrong');</script>";
    //         echo "<script>window.location.replace('/');</script>";
    //     }
    // }

    // public function deleteFangTypes(){
    //     $this->checkIfLoggedIn();

    //     $id = htmlspecialchars($_POST['id']);
    //     $this->adminService->deleteFangType($id);
    //     echo "<script>window.location.replace('/fang');</script>";
    // }

    public function addVenomTypeView(){
        $this->checkIfLoggedIn();

        require __DIR__ . '/../views/venom/addVenomType.php';
    }

    // public function addFangType(){
    //     $this->checkIfLoggedIn();

    //     $fangType = htmlspecialchars($_POST['fangType']);
    //     $fangCommonName = htmlspecialchars($_POST['fangCommonName']);
    //     $description = htmlspecialchars($_POST['description']);

    //     if($this->adminService->validateFangInput($fangType, $fangCommonName, $description)){
    //         $this->adminService->addFangType($fangType, $fangCommonName, $description);
    //         echo "<script>window.location.replace('/fang');</script>";
    //     } else {
    //         echo "<script>alert('Something went wrong');</script>";
    //         echo "<script>window.location.replace('/');</script>";
    //     }



    //     echo "<script>window.location.replace('/fang');</script>";
    // }
}


?>