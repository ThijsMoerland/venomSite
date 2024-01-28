<?php

require_once __DIR__ . '/../repositories/adminfangrepository.php';

class AdminfangService{
    private $adminFangRepository;

    public function __construct(){
        $this->adminFangRepository = new AdminfangRepository();
    }

    public function deleteFangType($id){
        $this->adminFangRepository->deleteFangType($id);
    }
    public function getFangTypeById($id){
        return $this->adminFangRepository->getFangTypeById($id);
    }

    public function validateFangInput($fangType, $fangCommonName, $fangDescription){
        if(strlen($fangType) < 1 || $fangType == null || $fangType == "" || $fangType == " "){
            echo "<script>alert('Scientific name cannot be empty');</script>";
            echo "<script>window.location.replace('/fang');</script>";
            die();
        }
        if(strlen($fangType) > 36){
            echo "<script>alert('Scientific name is too long);</script>";
            echo "<script>window.location.replace('/fang');</script>";
            die();
        }
        if(strlen($fangCommonName) > 51){
            echo "<script>alert('Common name is too long);</script>";
            echo "<script>window.location.replace('/fang');</script>";
            die();
        }
        if(strlen($fangDescription) > 1001){
            echo "<script>alert('Description is too long);</script>";
            echo "<script>window.location.replace('/fang');</script>";
            die();
        }
        return true;
    }

    public function updateFang($fangId, $fangType, $fangCommonName, $fangDescription){
        $this->adminFangRepository->updateFang($fangId, $fangType, $fangCommonName, $fangDescription);
    }

    public function addFangType($fangType, $fangCommonName, $description){
        $this->adminFangRepository->addFangType($fangType, $fangCommonName, $description);
    }


}

?>