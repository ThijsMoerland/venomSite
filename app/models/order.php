<?php

class OrderType {
    private $id;
    private $orderType;
    private $orderName;
    private $shortDescription;
    private $description;
    private $imgURL;

    public function getId(){
        return $this->id;
    }
    public function getOrderType(){
        return $this->orderType;
    }
    public function getOrderName(){
        return $this->orderName;
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