<?php
// require_once __DIR__ . '/../services/adminorderservice.php';
require_once __DIR__ . '/../services/adminservice.php';
require_once __DIR__ . '/../services/orderservice.php';
// require_once __DIR__ . '/../services/classservice.php';
class AdminsuborderController{
    private $adminOrderService;
    private $adminService;
    private $orderService;
    private $classService;
    function __construct(){
        $this->orderService = new OrderService();
        // $this->classService = new ClassService();
        $this->adminService = new AdminService();
        // $this->adminOrderService = new AdminorderService();
    }

    public function checkIfLoggedIn(){
        $admin = $this->adminService->checkIfLoggedIn();
        if($admin == null){
            echo "<script>window.location.replace('/admin/loadLoginView');</script>";
            die();
        }
    }

    // public function editOrderTypesView(){
    //     $this->checkIfLoggedIn();

    //     $orderId = htmlspecialchars($_POST['id']);
    //     $order = $this->orderService->getOrderTypeById($orderId);
    //     $classes = $this->classService->getAllClasses();
    //     require_once __DIR__ . '/../views/order/editOrderType.php';
    // }

    public function addSubOrderTypeView(){
        $this->checkIfLoggedIn();
        $orders = $this->orderService->getAllOrders();
        require_once __DIR__ . '/../views/suborder/addSubOrderType.php';
    }

    // public function updateOrder(){
    //     $this->checkIfLoggedIn();

    //     $orderId = htmlspecialchars($_POST['id']);
    //     $orderType = htmlspecialchars($_POST['orderType']);
    //     $orderName = htmlspecialchars($_POST['orderName']);
    //     $shortDescription = htmlspecialchars($_POST['shortDescription']);
    //     $description = htmlspecialchars($_POST['description']);
    //     $imgUrl = htmlspecialchars($_POST['imgURL']);

    //     if($_POST['higherTaxonomy'] != 0){
    //         $higherTaxonomy = htmlspecialchars($_POST['higherTaxonomy']);
    //         $this->adminOrderService->editHigherTaxonomyOfOrder($orderId, $higherTaxonomy);
    //     }else {
    //         $higherTaxonomy = 0;
    //     }


    //     if($this->adminOrderService->validateOrderInput($orderType, $orderName, $shortDescription, $description ,$imgUrl, $higherTaxonomy)){
    //         $this->adminOrderService->updateOrder($orderId, $orderType, $orderName, $shortDescription, $description ,$imgUrl);
    //         echo "<script>window.location.replace('/order');</script>";
    //     } else {
    //         echo "<script>alert('Something went wrong');</script>";
    //         echo "<script>window.location.replace('/');</script>";
    //     }
    // }

    public function addSubOrderType(){ // workin on this now
        $this->checkIfLoggedIn();

        $subOrderType = htmlspecialchars($_POST['subOrderType']);
        $subOrderName = htmlspecialchars($_POST['subOrderName']);
        $shortDescription = htmlspecialchars($_POST['shortDescription']);
        $description = htmlspecialchars($_POST['description']);
        $imgUrl = htmlspecialchars($_POST['imgURL']);
        if($_POST['higherTaxonomy'] != 0){
            $higherTaxonomy = htmlspecialchars($_POST['higherTaxonomy']);
        }else {
            $higherTaxonomy = 0;
        }

        if($this->adminOrderService->validateOrderInput($orderType, $orderName, $shortDescription, $description ,$imgUrl, $higherTaxonomy)){
            $this->adminOrderService->addOrder( $orderType, $orderName, $shortDescription, $description ,$imgUrl, $higherTaxonomy);
            echo "<script>window.location.replace('/order');</script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.replace('/');</script>";
        }
    }

    // public function deleteOrder(){
    //     $this->checkIfLoggedIn();

    //     $orderid = htmlspecialchars($_POST['id']);
    //     $this->adminOrderService->deleteOrder($orderid);
    // }
}

?>