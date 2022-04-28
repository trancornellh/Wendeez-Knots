<?php

class LoginContr extends Login {

    private $email;
    private $passcode;
    

    public function __construct($email, $passcode){  
        $this->email = $email;
        $this->passcode = $passcode;
       
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            header("location: ../BS Web/Login.html?error=emptyinput");
            exit();
        }


        $this->getUser($this->email, $this->passcode);
    }

    private function emptyInput() {
        $result="";
        if(empty($this->email) || empty($this->passcode)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    
}


?>