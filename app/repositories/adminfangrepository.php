<?php

require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/fangType.php';

class AdminfangRepository extends Repository{

    public function deleteFangType($id){
        try{
            $stmt = $this->connection->prepare("DELETE FROM `fangTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function getFangTypeById($id){
        try{
            $stmt = $this->connection->prepare("SELECT id, fangType, fangCommonName, description FROM `fangTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'FangType');
            $result = $stmt->fetch();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function updateFang($id, $fangType, $fangCommonName, $description){
        try{
            $stmt = $this->connection->prepare("UPDATE `fangTypes` SET fangType = :fangType, fangCommonName = :fangCommonName, description = :description WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':fangType', $fangType);
            $stmt->bindParam(':fangCommonName', $fangCommonName);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function addFangType($fangType, $fangCommonName, $description){
        try{
            $stmt = $this->connection->prepare("INSERT INTO `fangTypes` (fangType, fangCommonName, description) VALUES (:fangType, :fangCommonName, :description)");
            $stmt->bindParam(':fangType', $fangType);
            $stmt->bindParam(':fangCommonName', $fangCommonName);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }
    
}

?>