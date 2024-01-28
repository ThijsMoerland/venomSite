<?php
require_once __DIR__ . '/../services/orderservice.php';

class OrderController {
    private $orderService;

    function __construct(){
        $this->orderService = new OrderService();
    }

    public function index(){
        $orders = $this->orderService->getAllOrders();
        require_once __DIR__ . '/../views/order/index.php';
    }

    public function orderDetailview(){
        $orderId = htmlspecialchars($_POST['id']);
        $order = $this->orderService->getOrderTypeById($orderId);
        $higherTaxonomy = $this->orderService->getHigherTaxonomy($orderId);
        require_once __DIR__. '/../views/order/detailpage.php';
    }
}

?>