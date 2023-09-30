<?php

require_once __DIR__ . '/../services/fangservice.php';

class FangController{

    private $fangService;
    function __construct(){
        $this->fangService = new FangService();
    }
    public function index(){
        $fangTypes = $this->fangService->getAllFangTypes();
        require __DIR__ . '/../views/fang/index.php';
    }
    
}

?>