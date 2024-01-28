<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/fangType.php';



class FangRepository extends Repository {

    public function getAllFangTypes(){
        try{
            $stmt = $this->connection->prepare("SELECT id, fangType, fangCommonName, description FROM `fangTypes`");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'FangType');
            $result = $stmt->fetchAll();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
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