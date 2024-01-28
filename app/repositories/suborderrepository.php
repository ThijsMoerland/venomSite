<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/suborder.php';
require_once __DIR__.'/../models/order.php';

class SuborderRepository extends Repository{
    public function getAllSubOrders(){
        try{
            $stmt = $this->connection->prepare("SELECT `id`,`subOrderType`,`subOrderName`,`shortDescription`,`description`,`imgURL` FROM `subOrderTypes`");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'SuborderType');
            $result = $stmt->fetchAll();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function getSubOrderTypeById($id){
        try{
            $stmt = $this->connection->prepare("SELECT `id`,`subOrderType`,`subOrderName`,`shortDescription`,`description`,`imgURL` FROM `subOrderTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'SuborderType');
            $result = $stmt->fetch();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function getHigherTaxonomy($subOrderId){
        try{
            $stmt = $this->connection->prepare("SELECT id, orderType, orderName, shortDescription, description, imgURL FROM orderTypes WHERE id IN 
            (SELECT orderSubOrderIds.orderId FROM orderSubOrderIds WHERE orderSubOrderIds.subOrderId IN 
            (SELECT id FROM subOrderTypes WHERE id = :subOrderId))");
            $stmt->bindParam(':subOrderId', $subOrderId);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'OrderType');
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }
}


?>