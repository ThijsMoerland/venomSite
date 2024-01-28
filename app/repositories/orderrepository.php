<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/order.php';
require_once __DIR__.'/../models/class.php';

class OrderRepository extends Repository{
    public function getAllOrders(){
        try{
            $stmt = $this->connection->prepare("SELECT `id`,`orderType`,`orderName`,`shortDescription`,`description`,`imgURL` FROM `orderTypes`");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'OrderType');
            $result = $stmt->fetchAll();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function getOrderTypeById($id){
        try{
            $stmt = $this->connection->prepare("SELECT `id`,`orderType`,`orderName`,`shortDescription`,`description`,`imgURL` FROM `orderTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'OrderType');
            $result = $stmt->fetch();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function getHigherTaxonomy($orderId){
        try{
            $stmt = $this->connection->prepare("SELECT id, classType, classCommonName, shortDescription, description, imgURL FROM classTypes WHERE id IN 
                                                (SELECT classOrderIds.classId FROM classOrderIds WHERE classOrderIds.orderId IN 
                                                    (SELECT id FROM orderTypes WHERE id = :orderId))");
            $stmt->bindParam(':orderId', $orderId);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'ClassType');
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }
}


?>