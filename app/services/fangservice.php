<?php

require_once __DIR__ . '/../repositories/fangrepository.php';

class FangService{
    private $fangReposity;

    function __construct()
    {
        $this->fangReposity = new FangRepository();
    }

    public function getAllFangTypes(){
        return $this->fangReposity->getAllFangTypes();
    }
}