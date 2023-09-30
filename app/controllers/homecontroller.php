<?php

class HomeController{
    function __construct(){
        require __DIR__ . '/../views/home/disclamer.php';
    }
    public function index(){
        require __DIR__ . '/../views/home/homepage.php';
    }
}

?>