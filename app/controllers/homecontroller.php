<?php
require_once __DIR__ . '/../services/homeservice.php';
class HomeController{
    private $homeService;
    function __construct(){
        $this->homeService = new HomeService();
        
    }

    public function index(){
        if($this->homeService->checkIfDisclamerRead() == false){
            echo "<script>window.location.replace('/home/disclamer');</script>";
        }
        require __DIR__ . '/../views/home/homepage.php';
    }

    public function disclamer(){
        require __DIR__ . '/../views/home/disclamer.php';
    }

    public function okDisclamer(){
        $this->homeService->okDisclamer();
        echo "<script>window.location.replace('/');</script>";
    }
}

?>