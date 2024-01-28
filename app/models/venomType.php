<?php

class VenomType{
    private $id;
    private $venomType;
    private $description;
    private $effect;
    // private $foundInSpecies;

    //getters
    public function getId(){
        return $this->id;
    }
    public function getVenomType(){
        return $this->venomType;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getEffect(){
        return $this->effect;
    }
    // public function getFoundInSpecies(){
    //     return $this->foundInSpecies;
    // }
}

?>