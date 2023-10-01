<?php

require_once __DIR__ . '/../services/adminservice.php';

class AdminController{
    private $adminService;
    function __construct(){
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
        $this->adminService->login($username, $password);
    }
}

?>