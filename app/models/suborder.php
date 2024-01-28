<?php

class SuborderType {
    private $id;
    private $subOrderType;
    private $subOrderName;
    private $shortDescription;
    private $description;
    private $imgURL;

    public function getId(){
        return $this->id;
    }
    public function getOrderType(){
        return $this->subOrderType;
    }
    public function getOrderName(){
        return $this->subOrderName;
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