<?php 

require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../models/venomType.php';

class VenomRepository extends Repository{
    public function getAllVenomTypes(){
        try{
            $stmt = $this->connection->prepare("SELECT id, venomType, description, effect, foundInSpecies FROM `venomTypes`");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'VenomType');
            $result = $stmt->fetchAll();

            return $result;
        }catch (PDOException $e)
        {
            echo $e;
        }
    }
}

?>