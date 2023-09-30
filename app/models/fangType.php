<?php

class FangType{
    private $id;
    private $fangType;
    private $fangCommonName;
    private $description;

    //getters
    public function getId(){
        return $this->id;
    }
    public function getFangType(){
        return $this->fangType;
    }
    public function getFangCommonName(){
        return $this->fangCommonName;
    }
    public function getDescription(){
        return $this->description;
    }
}

?>