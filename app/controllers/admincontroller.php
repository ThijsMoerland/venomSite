<?php

require_once __DIR__ . '/../services/adminservice.php';
require_once __DIR__ . '/../services/fangservice.php';
class AdminController{
    private $fangService;
    private $adminService;
    function __construct(){
        $this->fangService = new FangService();
        $this->adminService = new AdminService();
    }
    public function index(){
        $this->checkIfLoggedIn();
        $admin = $this->adminService->checkIfLoggedIn();
        // require __DIR__ . '/../views/admin/index.php';
    }
    public function checkIfLoggedIn(){
        $admin = $this->adminService->checkIfLoggedIn();
        if($admin == null){
            echo "<script>window.location.replace('/admin/loadLoginView');</script>";
            die();
        }
    }
    public function loadLoginView(){
        require __DIR__ . '/../views/admin/login.php';
    }
    public function login(){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        if($this->adminService->login($username, $password)){
            echo "<script>alert('SUCCESS FUCKERS');</script>";
            echo "<script>window.location.replace('/admin');</script>";
        } else {
            echo "<script>alert('Wrong username or password');</script>";
            echo "<script>window.location.replace('/admin/loadLoginView');</script>";
        }
        die();
    }
    public function logout(){
        $this->adminService->logout();
        echo "<script>window.location.replace('/');</script>";
    }

    public function editFangTypesView(){
        $this->checkIfLoggedIn();

        $fangId = htmlspecialchars($_POST['id']);
        $fang = $this->adminService->getFangTypeById($fangId);
        require __DIR__ . '/../views/fang/editFang.php';
    }

    public function updateFang(){
        $this->checkIfLoggedIn();

        $fangId = htmlspecialchars($_POST['id']);
        $fangType = htmlspecialchars($_POST['fangType']);
        $fangCommonName = htmlspecialchars($_POST['fangCommonName']);
        $fangDescription = htmlspecialchars($_POST['description']);


        if($this->adminService->validateFangInput($fangType, $fangCommonName, $fangDescription)){
            $this->adminService->updateFang($fangId, $fangType, $fangCommonName, $fangDescription);
            echo "<script>window.location.replace('/fang');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }
    }

    public function deleteFangTypes(){
        $this->checkIfLoggedIn();

        $id = htmlspecialchars($_POST['id']);
        $this->adminService->deleteFangType($id);
    }

    public function addFangTypeView(){
        $this->checkIfLoggedIn();

        require __DIR__ . '/../views/fang/addFang.php';
    }

    public function addFangType(){
        $this->checkIfLoggedIn();

        $fangType = htmlspecialchars($_POST['fangType']);
        $fangCommonName = htmlspecialchars($_POST['fangCommonName']);
        $description = htmlspecialchars($_POST['description']);

        if($this->adminService->validateFangInput($fangType, $fangCommonName, $description)){
            $this->adminService->addFangType($fangType, $fangCommonName, $description);
            echo "<script>window.location.replace('/fang');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }



        echo "<script>window.location.replace('/fang');</script>";
    }
}

?>