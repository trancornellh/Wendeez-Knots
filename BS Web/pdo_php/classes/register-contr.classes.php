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

    public function registerUser(){
        if($this->emptyInput() == false){
            header("location: ../Register.html?error=emptyinput");
            exit();
        }

        if($this->invalidEmail() == false){
            header("location: ../Register.html?error=invalidemail");
            exit();
        }

        if($this->passwordMatch() == false){
            header("location: ../Register.html?error=passwordmatch");
            exit();
        }

        if($this->emailTaken() == false){
            header("location: ../Register.html?error=emailtaken");
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


