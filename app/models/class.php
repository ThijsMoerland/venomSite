<?php 

class ClassType {
    private $id;
    private $classType;
    private $classCommonName;
    private $shortDescription;
    private $description;
    private $imgURL;

    //getters
    public function getId(){
        return $this->id;
    }
    public function getClassType(){
        return $this->classType;
    }
    public function getClassCommonName(){
        return $this->classCommonName;
    }
    public function getShortDescription(){
        return $this->shortDescription;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImgURL(){
        return $this->imgURL;
    }
}