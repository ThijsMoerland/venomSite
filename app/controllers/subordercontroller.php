<?php
require_once __DIR__ . '/../services/suborderservice.php';

class SuborderController {
    private $subOrderService;

    function __construct(){
        $this->subOrderService = new SuborderService();
    }

    public function index(){
        $subOrders = $this->subOrderService->getAllSubOrders();
        require_once __DIR__ . '/../views/suborder/index.php';
    }

    public function orderDetailview(){
        $orderId = htmlspecialchars($_POST['id']);
        $order = $this->subOrderService->getSubOrderTypeById($orderId);
        $higherTaxonomy = $this->subOrderService->getHigherTaxonomy($orderId);
        require_once __DIR__. '/../views/order/detailpage.php';
    }
}

?>