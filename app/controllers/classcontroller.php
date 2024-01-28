<?php

require_once __DIR__ . '/../services/classservice.php';

class ClassController {

    private $classService;
    function __construct(){
        $this->classService = new ClassService();
    }

    public function index(){
        $classes = $this->classService->getAllClasses();
        require_once __DIR__ . '/../views/Class/index.php';
    }

    public function classDetailview(){
        $classId = htmlspecialchars($_POST['id']);
        $class = $this->classService->getClassTypeById($classId);
        $lowerTaxonomy = $this->classService->getLowerTaxonomy($classId);
        require_once __DIR__. '/../views/class/detailpage.php';
    }
}

?>