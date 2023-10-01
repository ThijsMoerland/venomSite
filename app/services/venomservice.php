<?php 

require_once __DIR__ . '/../repositories/venomrepository.php';
class VenomService{
    private $VenomRepository;

    public function __construct(){
        $this->VenomRepository = new VenomRepository();
    }

    public function getAllVenomTypes(){
        return $this->VenomRepository->getAllVenomTypes();
    }
}

?>