<?php
require_once __DIR__ . '/../repositories/adminorderrepository.php';

class AdminorderService{
    private $adminOrderRepository;
    
    public function __construct(){
        $this->adminOrderRepository = new AdminorderRepository();
    }

    public function validateOrderInput($orderType, $orderName, $shortDescription, $description, $imgURL, $higherTaxonomy){
        if(strlen($orderType) < 1 || $orderType == null || $orderType == "" || $orderType == " "){
            echo "<script>alert('Class type cannot be empty');</script>";
            echo "<script>window.location.replace('/order');</script>";
            die();
        }
        if(strlen($orderType) > 101){
            echo "<script>alert('Class type is too long');</script>";
            echo "<script>window.location.replace('/order');</script>";
            die();
        }
        if(strlen($orderName) > 101){
            echo "<script>alert('Class common name is too long');</script>";
            echo "<script>window.location.replace('/order');</script>";
            die();
        }
        if(strlen($shortDescription) > 256){
            echo "<script>alert('Class short description is too long');</script>";
            echo "<script>window.location.replace('/order');</script>";
            die();
        }
        if(strlen($imgURL) > 256){
            echo "<script>alert('imgURL is too long');</script>";
            echo "<script>window.location.replace('/order');</script>";
            die();
        }
        if(strlen($description) > 2001){
            echo "<script>alert('Description is too long');</script>";
            echo "<script>window.location.replace('/order');</script>";
            die();
        }
        if(strlen($higherTaxonomy) > 1){
            echo "<script>alert('something went wrong');</script>";
            echo "<script>window.location.replace('/order');</script>";
            die();
        }
        return true;
    }

    public function updateOrder($orderId, $orderType, $orderName, $shortDescription, $description ,$imgUrl){
        $this->adminOrderRepository->updateOrder($orderId, $orderType, $orderName, $shortDescription, $description ,$imgUrl);
    }

    public function addOrder($orderType, $orderName, $shortDescription, $description ,$imgUrl, $higherTaxonomy){
        $this->adminOrderRepository->addOrder($orderType, $orderName, $shortDescription, $description ,$imgUrl, $higherTaxonomy);
    }

    public function deleteOrder($orderId){
        $this->adminOrderRepository->deleteOrder($orderId);
    }

    public function editHigherTaxonomyOfOrder($orderId, $higherTaxonomy){
        $this->adminOrderRepository->editHigherTaxonomyOfOrder($orderId, $higherTaxonomy);
    }
}

?>