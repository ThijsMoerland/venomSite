<?php

require_once __DIR__. '/repository.php';
require_once __DIR__.'/../models/venomtype.php';

class AdminvenomRepository extends Repository{

    public function getVenomTypeById($id){
        try{
            $stmt = $this->connection->prepare("SELECT id, venomType, effect, description FROM `venomTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'VenomType');
            $result = $stmt->fetch();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function addVenomType($venomType, $effect, $description){
        try{
            $stmt = $this->connection->prepare("INSERT INTO `venomTypes` (venomType, effect, description) VALUES (:venomType, :effect, :description)");
            $stmt->bindParam(':venomType', $venomType);
            $stmt->bindParam(':effect', $effect);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function updateVenomType($id, $venomType, $effect, $description){
        try{
            $stmt = $this->connection->prepare("UPDATE `venomTypes` SET venomType = :venomType, effect = :effect, description = :description WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':venomType', $venomType);
            $stmt->bindParam(':effect', $effect);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }catch (PDOException $e)
        {
            echo $e;
            echo "<script>alert('Something went wrong');</script>";
        }
    }
    
}

?>