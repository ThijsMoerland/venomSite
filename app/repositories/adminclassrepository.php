<?php
require_once __DIR__ . '/repository.php';
// require_once __DIR__ . '/../models/class.php';

class AdminclassRepository extends Repository{
    public function addClassType($classType, $classCommonName, $shortDescription, $description, $imgURL){
        try{
            $stmt = $this->connection->prepare("INSERT INTO `classTypes` (classType, classCommonName, shortDescription, description, imgURL) VALUES (:classType, :classCommonName, :shortDescription, :description, :imgURL)");
            $stmt->bindParam(':classType', $classType);
            $stmt->bindParam(':classCommonName', $classCommonName);
            $stmt->bindParam(':imgURL', $imgURL);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':shortDescription', $shortDescription);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo "<script>console.log(".$e.");</script>";
        }
    }

    public function updateClass($classId, $class, $classCommonName, $shortDescription, $description ,$imgUrl){
        try{
            $stmt = $this->connection->prepare("UPDATE `classTypes` SET classType = :classType, classCommonName = :classCommonName, shortDescription = :shortDescription, description = :description, imgUrl = :imgUrl WHERE id = :classId");
            $stmt->bindParam(':classId', $classId);
            $stmt->bindParam(':classType', $class);
            $stmt->bindParam(':classCommonName', $classCommonName);
            $stmt->bindParam(':imgUrl', $imgUrl);
            $stmt->bindParam(':shortDescription', $shortDescription);
            $stmt->bindParam(':description', $description);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo "<script>alert(".$e.");</script>";
            
        }
    }

    public function deleteClass($id){
        try{
            $stmt = $this->connection->prepare("DELETE FROM `classTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

}