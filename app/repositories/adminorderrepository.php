<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/order.php';

class AdminorderRepository extends Repository{
    public function updateOrder($orderId, $orderType, $orderName, $shortDescription, $description ,$imgUrl){
        try{
            $stmt = $this->connection->prepare("UPDATE `orderTypes` SET orderType = :orderType, orderName = :orderName, shortDescription = :shortDescription, description = :description, imgUrl = :imgUrl WHERE id = :orderId");
            $stmt->bindParam(':orderId', $orderId);
            $stmt->bindParam(':orderType', $orderType);
            $stmt->bindParam(':orderName', $orderName);
            $stmt->bindParam(':imgUrl', $imgUrl);
            $stmt->bindParam(':shortDescription', $shortDescription);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo "<script>alert(".$e.");</script>";
            
        }
    }

    public function addOrder($orderType, $orderName, $shortDescription, $description ,$imgUrl, $higherTaxonomy){
        try{
            $stmt = $this->connection->prepare("INSERT INTO orderTypes(`orderType`,`orderName`,`shortDescription`,`description`,`imgURL`)
            VALUES(:orderType, :orderName, :shortDescription, :description, :imgUrl);
            INSERT INTO classOrderIds (classId, orderId) VALUES (:classId, (SELECT MAX(id) FROM orderTypes))");
            $stmt->bindParam(':orderType', $orderType);
            $stmt->bindParam(':orderName', $orderName);
            $stmt->bindParam(':imgUrl', $imgUrl);
            $stmt->bindParam(':shortDescription', $shortDescription);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':classId', $higherTaxonomy);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo "<script>alert(".$e.");</script>";
            
        }
    }

    public function deleteOrder($orderId){
        try {
            $stmt = $this->connection->prepare("DELETE FROM classOrderIds WHERE id = (SELECT id FROM classOrderIds WHERE orderId = :id);
            DELETE FROM orderTypes WHERE id = :id;");
            $stmt->bindParam(':id', $orderId);
            $stmt->execute();
        } catch (PDOException $e)
        {
            // echo "<script>alert(".$e.");</script>";
            
        }
    }

    public function editHigherTaxonomyOfOrder($orderId, $higherTaxonomy){
        try{
            $stmt = $this->connection->prepare("UPDATE classOrderIds SET classid = :classId WHERE orderid = :orderId;");
            $stmt->bindParam(':orderId', $orderId);
            $stmt->bindParam(':classId', $higherTaxonomy);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo "<script>alert(".$e.");</script>";
        }
    }
}

?>