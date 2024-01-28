<?php
require_once __DIR__ . '/../services/adminclassservice.php';
require_once __DIR__ . '/../services/adminservice.php';
require_once __DIR__ . '/../services/classservice.php';
class AdminclassController{
    
    private $adminClassService;
    private $adminService;
    private $classService;
    function __construct(){
        $this->classService = new ClassService();
        $this->adminService = new AdminService();
        $this->adminClassService = new AdminclassService();
    }
    public function checkIfLoggedIn(){
        $admin = $this->adminService->checkIfLoggedIn();
        if($admin == null){
            echo "<script>window.location.replace('/admin/loadLoginView');</script>";
            die();
        }
    }
    public function addClassTypeView(){
        $this->checkIfLoggedIn();

        require_once __DIR__ . '/../views/class/addClassType.php';
    }

    public function addClassType(){
        $this->checkIfLoggedIn();

        $classType = htmlspecialchars($_POST['classType']);
        $description = htmlspecialchars($_POST['description']);
        $shortDescription = htmlspecialchars($_POST['shortDescription']);
        $imgURL = htmlspecialchars($_POST['imgURL']);
        $classCommonName = htmlspecialchars($_POST['classCommonName']);

        if($this->adminClassService->validateClassInput($classType, $classCommonName, $shortDescription, $description, $imgURL)){
            $this->adminClassService->addClassType($classType, $classCommonName, $shortDescription, $description, $imgURL);
            echo "<script>window.location.replace('/class');</script>";
        } else {
            echo "<script>alert('Something went wrong here');</script>";
            echo "<script>window.location.replace('/');</script>";
        }



        echo "<script>window.location.replace('/class');</script>";
    }

    public function editClassTypesView(){
        $this->checkIfLoggedIn();

        $classId = htmlspecialchars($_POST['id']);
        $class = $this->classService->getClassTypeById($classId);
        require_once __DIR__ . '/../views/class/editClassType.php';
    }

    public function updateClass(){
        $this->checkIfLoggedIn();

        $classId = htmlspecialchars($_POST['id']);
        $class = htmlspecialchars($_POST['classType']);
        $classCommonName = htmlspecialchars($_POST['classCommonName']);
        $shortDescription = htmlspecialchars($_POST['shortDescription']);
        $description = htmlspecialchars($_POST['description']);
        $imgUrl = htmlspecialchars($_POST['imgURL']);


        if($this->adminClassService->validateClassInput($class, $classCommonName, $shortDescription, $description ,$imgUrl)){
            $this->adminClassService->updateClass($classId, $class, $classCommonName, $shortDescription, $description ,$imgUrl);
            echo "<script>window.location.replace('/class');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }
    }
    
    public function deleteClass(){
        $this->checkIfLoggedIn();

        $id = htmlspecialchars($_POST['id']);
        $this->adminClassService->deleteClass($id);
        echo "<script>window.location.replace('/class');</script>";
    }
}