<?php

require_once __DIR__.'/repository.php';
require_once __DIR__.'/../models/class.php';
require_once __DIR__.'/../models/order.php';

class ClassRepository extends Repository{
    public function getAllClasses(){
        try{
            $stmt = $this->connection->prepare("SELECT id, classType, classCommonName, shortDescription, description, imgURL FROM `classTypes`");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'ClassType');
            $result = $stmt->fetchAll();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function getClassTypeById($id){
        try{
            $stmt = $this->connection->prepare("SELECT id, classType, classCommonName, shortDescription, description, imgURL FROM classTypes WHERE id = :classId");
            $stmt->bindParam(':classId', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'ClassType');
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function getLowerTaxonomy($classId){
        try{
            $stmt = $this->connection->prepare("SELECT `id`,`orderType`,`orderName`,`shortDescription`,`description`,`imgURL` FROM `orderTypes` WHERE id IN
                                                (SELECT classOrderIds.orderId FROM classOrderIds WHERE classOrderIds.classId IN 
                                                    (SELECT classTypes.id FROM classTypes where classTypes.id = :classId))");
            $stmt->bindParam(':classId', $classId);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'OrderType');
            $result = $stmt->fetchAll();
            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }
}