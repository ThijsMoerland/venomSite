<?php

class Admin{
    private $id, $username, $hashedPassword;
    //getters
    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getHashedPassword(){
        return $this->hashedPassword;
    }

    //unset hashedPassword
    public function unsetPassword(){
        unset($this->hashedPassword);
    }
}

?>