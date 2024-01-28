<?php

require_once __DIR__. '/../repositories/classrepository.php';

class ClassService{

    private $classRepository;

    function __construct(){
        $this->classRepository = new ClassRepository();
    }

    public function getAllClasses(){
        return $this->classRepository->getAllClasses();
    }

    public function getClassTypeById($id){
        return $this->classRepository->getClassTypeById($id);
    }
    public function getLowerTaxonomy($id){
        return $this->classRepository->getLowerTaxonomy($id);
    }
    
}