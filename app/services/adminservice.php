<?php

require_once __DIR__ . '/../repositories/adminrepository.php';

class AdminService{
    private $adminRepository;

    public function __construct(){
        $this->adminRepository = new AdminRepository();
    }

    public function checkIfLoggedIn(){
        //if admin session is active return the admin object
        if(isset($_SESSION['admin'])){
            return $_SESSION['admin'];
        } else {
            return false;
        }
    }
    public function login($username, $password){
        $admin = $this->adminRepository->getAdminUserByUsername($username);
        $this->verifyPassword($password, $admin);
    }

    public function hashPassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password, $admin){       
        if(password_verify($password, $admin->getHashedPassword())){
            $admin->unsetPassword();
            $_SESSION['admin'] = $admin;
            echo "<script>alert('SUCCESS FUCKERS');</script>";
            echo "<script>window.location.replace('/admin');</script>";
            die();
        } 
        $admin->unsetPassword();
        echo "<script>alert('Wrong username or password');</script>";
        echo "<script>window.location.replace('/admin/loadLoginView');</script>";
        die();
    }
}
?>