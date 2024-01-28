<?php

require_once __DIR__ . '/../repositories/adminclassrepository.php';
class AdminclassService{
    private $adminClassRepository;
    
    public function __construct(){
        $this->adminClassRepository = new AdminclassRepository();
    }

    public function validateClassInput($classType, $commonName, $shortDescription, $description, $imgURL){
        if(strlen($classType) < 1 || $classType == null || $classType == "" || $classType == " "){
            echo "<script>alert('Class type cannot be empty');</script>";
            echo "<script>window.location.replace('/class');</script>";
            die();
        }
        if(strlen($classType) > 256){
            echo "<script>alert('Class type is too long);</script>";
            echo "<script>window.location.replace('/class');</script>";
            die();
        }
        if(strlen($commonName) > 101){
            echo "<script>alert('Class common name is too long);</script>";
            echo "<script>window.location.replace('/class');</script>";
            die();
        }
        if(strlen($shortDescription) > 256){
            echo "<script>alert('Class short description is too long);</script>";
            echo "<script>window.location.replace('/class');</script>";
            die();
        }
        if(strlen($imgURL) > 256){
            echo "<script>alert('imgURL is too long);</script>";
            echo "<script>window.location.replace('/class');</script>";
            die();
        }
        if(strlen($description) > 2001){
            echo "<script>alert('Description is too long);</script>";
            echo "<script>window.location.replace('/class');</script>";
            die();
        }
        return true;
    }

    public function addClassType($classType, $classCommonName, $shortDescription, $description, $imgURL){
        $this->adminClassRepository->addClassType($classType, $classCommonName, $shortDescription, $description, $imgURL);
    }

    public function updateClass($classId, $class, $classCommonName, $shortDescription, $description ,$imgUrl){
        $this->adminClassRepository->updateClass($classId, $class, $classCommonName, $shortDescription, $description ,$imgUrl);
    }

    public function deleteClass($id){
        $this->adminClassRepository->deleteClass($id);
    }


}

?>