<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/fangType.php';



class FangRepository extends Repository {
    // public function addAnimal($scientificName, $commonName, $temperature, $animalType, $venomousPoisonous, $consumtion, $description){
    //     try {
    //         $stmt = $this->connection->prepare("INSERT INTO animals
    //         (`scientificName`,`commonName`,`temperature`,`animalType`,`consumerType`,`description`,`venomousPoisonous`) 
    //         VALUES (:scientificName, :commonName, :temperature, :animalType, :consumerType, :description, :venomousPoisonous)");
    //         $stmt->bindParam(':scientificName', $scientificName);
    //         $stmt->bindParam(':commonName', $commonName);
    //         $stmt->bindParam(':temperature', $temperature);
    //         $stmt->bindParam(':animalType', $animalType);
    //         $stmt->bindParam(':venomousPoisonous', $venomousPoisonous);
    //         $stmt->bindParam(':consumerType', $consumtion);
    //         $stmt->bindParam(':description', $description);
    //         $stmt->execute();
            
    //         return true;

    //     } catch (PDOException $e)
    //     {
    //         echo $e;
    //     }
    // }

    public function getAllFangTypes(){
        try{
            $stmt = $this->connection->prepare("SELECT id, fangType, fangCommonName, description FROM `fangTypes`");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'FangType');
            $result = $stmt->fetchAll();

            return $result;
        }catch (PDOException $e)
        {
            echo $e;
        }
        
    }

    // public function writePictureToDatabase($animalID, $fileDestination, $fileSize){
    //     try {
    //         $stmt = $this->connection->prepare("INSERT INTO pictures
    //         (`animalID`,`photoURL`,`photoSize`) 
    //         VALUES (:ID, :destination, :size)");
    //         $stmt->bindParam(':ID', $animalID);
    //         $stmt->bindParam(':destination', $fileDestination);
    //         $stmt->bindParam(':size', $fileSize);
    //         $stmt->execute();
    //     }catch(PDOExecption $e){
    //         echo $e;
    //     }
    // }
}