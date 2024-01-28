<?php
require_once __DIR__ . '/../repositories/suborderrepository.php';
class SuborderService {
    private $subOrderRepository;

    function __construct(){
        $this->subOrderRepository = new SuborderRepository();
    }

    public function getAllSubOrders(){
        return $this->subOrderRepository->getAllSubOrders();
    }
    public function getSubOrderTypeById($id){
        return $this->subOrderRepository->getSubOrderTypeById($id);
    }
    public function getHigherTaxonomy($id){
        return $this->subOrderRepository->getHigherTaxonomy($id);
    }
}

?>