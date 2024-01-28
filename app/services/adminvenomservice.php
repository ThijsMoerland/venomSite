<?php

require_once __DIR__ . '/../repositories/adminvenomrepository.php';

class AdminvenomService{
    private $adminVenomRepository;

    public function __construct(){
        $this->adminVenomRepository = new AdminVenomRepository();
    }

    public function getVenomTypeById($id){
        return $this->adminVenomRepository->getVenomTypeById($id);
    }

    public function validateVenomInput($venomType, $effect, $description){
        if(strlen($venomType) < 1 || $venomType == null || $venomType == "" || $venomType == " "){
            echo "<script>alert('Venom Type cannot be empty');</script>";
            echo "<script>window.location.replace('/venom');</script>";
            die();
        }
        if(strlen($venomType) > 101){
            echo "<script>alert('Venom type is too long);</script>";
            echo "<script>window.location.replace('/venom');</script>";
            die();
        }
        if(strlen($effect) > 2001){
            echo "<script>alert('effect is too long);</script>";
            echo "<script>window.location.replace('/venom');</script>";
            die();
        }
        if(strlen($description) > 2001){
            echo "<script>alert('Description is too long);</script>";
            echo "<script>window.location.replace('/venom');</script>";
            die();
        }
        return true;
    }

    public function addVenomType($venomType, $effect, $description){
        $this->adminVenomRepository->addVenomType($venomType, $effect, $description);
    }

    public function updateVenomType($id, $venomType, $effect, $description){
        $this->adminVenomRepository->updateVenomType($id, $venomType, $effect, $description);
    }

    public function deleteVenomType($id){
        $this->adminVenomRepository->deleteVenomType($id);
    }
    
}

?>