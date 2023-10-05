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
        return $this->verifyPassword($password, $admin);
    }

    public function hashPassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password, $admin){       
        if(password_verify($password, $admin->getHashedPassword())){
            $admin->unsetPassword();
            $_SESSION['admin'] = $admin;
            return true;
        } 
        $admin->unsetPassword();
        return false;
    }

    public function logout(){
        unset($_SESSION['admin']);
    }

    public function deleteFangType($id){
        $this->adminRepository->deleteFangType($id);
    }
    public function getFangById($id){
        return $this->adminRepository->getFangById($id);
    }

    public function validateFangInput($fangId, $fangType, $fangCommonName, $fangDescription){
        if(strlen($fangType) > 35){
            echo "<script>alert('Scientific name is too long ".strlen($fangType)." / 35');</script>";
            echo "<script>window.location.replace('/admin/editFangTypesView');</script>";
            die();
        }
        if(strlen($fangCommonName) > 50){
            echo "<script>alert('Common name is too long ".strlen($fangCommonName)." / 50');</script>";
            echo "<script>window.location.replace('/admin/editFangTypesView');</script>";
            die();
        }
        if(strlen($fangDescription) > 1000){
            echo "<script>alert('Description is too long ".strlen($fangDescription)." / 1000');</script>";
            echo "<script>window.location.replace('/admin/editFangTypesView');</script>";
            die();
        }
        $this->updateFang($fangId, $fangType, $fangCommonName, $fangDescription);
    }

    public function updateFang($fangId, $fangType, $fangCommonName, $fangDescription){
        $this->adminRepository->updateFang($fangId, $fangType, $fangCommonName, $fangDescription);
    }
}
?>