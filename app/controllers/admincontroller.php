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
        $fangTypes = $this->fangService->getAllFangTypes();
        require __DIR__ . '/../views/admin/editFangTypes/allFangTypes.php';
    }

    public function deleteFangTypes(){
        $id = htmlspecialchars($_POST['id']);
        $this->adminService->deleteFangType($id);
    }
}

?>