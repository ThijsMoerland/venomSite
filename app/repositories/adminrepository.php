<?php

require_once __DIR__. '/repository.php';
require_once __DIR__.'/../models/admin.php';
require_once __DIR__.'/../models/fangType.php';

class AdminRepository extends Repository{

    public function getAdminUserByUsername($username){
        try{
            $stmt = $this->connection->prepare("SELECT DISTINCT id, username, hashedPassword FROM `admin` WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin');
            $result = $stmt->fetch();

            return $result;
        }catch (PDOException $e)
        {
            // echo $e;
        }
    }

    public function deleteFangType($id){
        try{
            $stmt = $this->connection->prepare("DELETE FROM `fangTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }catch (PDOException $e)
        {
            echo $e;
        }
    }

    public function getFangById($id){
        try{
            $stmt = $this->connection->prepare("SELECT id, fangType, fangCommonName, description FROM `fangTypes` WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'FangType');
            $result = $stmt->fetch();

            return $result;
        }catch (PDOException $e)
        {
            echo $e;
        }
    }
}

?>