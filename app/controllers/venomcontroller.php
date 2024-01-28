<?php

require_once __DIR__ . '/../services/venomservice.php';

class VenomController{

    private $venomService;
    function __construct()
    {
        $this->venomService = new VenomService();
    }

    public function index(){
        $venomTypes = $this->venomService->getAllVenomTypes();
        require_once __DIR__ . '/../views/venom/index.php';
    }
}

