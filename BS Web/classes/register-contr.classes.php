<?php

class RegisterContr extends Register {

    private $email;
    private $passcode;
    private $rptpasscode;
    private $fname;
    private $lname;

    public function __construct($email, $passcode, $rptpasscode, $fname, $lname){  
        $this->email = $email;
        $this->passcode = $passcode;
        $this->rptpasscode = $rptpasscode;
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function RegisterUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if($this->invalidEmail() == false){
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        if($this->passwordMatch() == false){
            header("location: ../index.php?error=passwordmatch");
            exit();
        }

        if($this->emailTaken() == false){
            header("location: ../index.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->email, $this->passcode, $this->fname, $this->lname);
    }

    private function emptyInput() {
        $result="";
        if(empty($this->email) || empty($this->passcode) || empty($this->rptpasscode) || empty($this->fname) || empty($this->lname)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result="";
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result="";
        if($this->passcode !== $this->rptpasscode){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function emailTaken(){
        $result="";
        if(!$this->checkEmail($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}


?>