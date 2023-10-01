<?php

require_once __DIR__. '/repository.php';
require_once __DIR__.'/../models/admin.php';

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
            echo $e;
        }
    }
}

?>