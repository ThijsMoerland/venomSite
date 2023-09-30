<?php

class HomeController{
    function __construct(){
        require __DIR__ . '/../views/header.php';
    }
    public function index(){
        require __DIR__ . '/../views/home/homepage.php';
        require __DIR__ . '/../views/footer.php';

    }
}

?>