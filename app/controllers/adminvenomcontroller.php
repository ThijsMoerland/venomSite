<?php 
require_once __DIR__ . '/../services/adminvenomservice.php';
require_once __DIR__ . '/../services/adminservice.php';

class AdminvenomController{
    
    private $adminService;
    private $adminVenomService;
    function __construct(){
        $this->adminService = new AdminService();
        $this->adminVenomService = new AdminvenomService();
    }
    public function checkIfLoggedIn(){
        $admin = $this->adminService->checkIfLoggedIn();
        if($admin == null){
            echo "<script>window.location.replace('/admin/loadLoginView');</script>";
            die();
        }
    }
    public function editVenomTypesView(){
        $this->checkIfLoggedIn();

        $venomId = htmlspecialchars($_POST['id']);
        $venom = $this->adminVenomService->getVenomTypeById($venomId);
        require __DIR__ . '/../views/venom/editVenomType.php';
    }

    public function updateVenomType(){
        $this->checkIfLoggedIn();

        $venomId = htmlspecialchars($_POST['id']);
        $venomType = htmlspecialchars($_POST['venomType']);
        $description = htmlspecialchars($_POST['description']);
        $effect = htmlspecialchars($_POST['effect']);


        if($this->adminVenomService->validateVenomInput($venomType, $effect, $description)){
            $this->adminVenomService->updateVenomType($venomId, $venomType, $effect, $description);
            echo "<script>window.location.replace('/venom');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }
    }

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

    public function addVenomType(){
        $this->checkIfLoggedIn();

        $venomType = htmlspecialchars($_POST['venomType']);
        $effect = htmlspecialchars($_POST['effect']);
        $description = htmlspecialchars($_POST['description']);

        if($this->adminVenomService->validateVenomInput($venomType, $effect, $description)){
            $this->adminVenomService->addVenomType($venomType, $effect, $description);
            echo "<script>window.location.replace('/venom');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }
    }
}


?>