<?php
require_once __DIR__ . '/../repositories/orderrepository.php';
class OrderService {
    private $orderRepository;

    function __construct(){
        $this->orderRepository = new OrderRepository();
    }

    public function getAllOrders(){
        return $this->orderRepository->getAllOrders();
    }
    public function getOrderTypeById($id){
        return $this->orderRepository->getOrderTypeById($id);
    }
    public function getHigherTaxonomy($id){
        return $this->orderRepository->getHigherTaxonomy($id);
    }
}

?>