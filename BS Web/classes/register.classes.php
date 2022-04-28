<?php

class Register extends Dbh {

    protected function setUser($email, $passcode, $fname, $lname) {
        $stmt = $this->connect()->prepare('INSERT INTO users(email, passcode, fname, lname) VALUES (?,?,?,?);');

        $hashedPasscode = password_hash($passcode, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email, $hashedPasscode, $fname, $lname))){
            $stmt = null;
            header("location: ../Register.html?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkEmail($email){
        $stmt = $this->connect()->prepare('SELECT email FROM users WHERE email = ?;');

        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../Register.html?error=stmtfailed");
            exit();
        }
        $resultCheck="";
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;
    }

 

}




?>