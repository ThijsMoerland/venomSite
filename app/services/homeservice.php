<?php

class HomeService{
    

    public function checkIfDisclamerRead(){
        if(isset($_SESSION['disclamer'])){
            return true;
        }
        else{
            return false;
        }
    }

    public function okDisclamer(){
        $_SESSION['disclamer'] = true;
    }
    
}

?>