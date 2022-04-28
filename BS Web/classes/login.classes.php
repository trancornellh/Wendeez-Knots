<?php

class Login extends Dbh {

    protected function getUser($email, $passcode) {
        $stmt = $this->connect()->prepare('SELECT passcode FROM users WHERE email = ?;');

        

        if(!$stmt->execute(array($email, $passcode))){
            $stmt = null;
            header("location: ../Login.html?error=stmtfailed");
            exit();
        }

        if(!$stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../Login.html?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPass = password_verify($passcode, $pwdHashed[0]["passcode"]);

        if($checkPass == false){
            $stmt = null;
            header("location: ../Login.html?error=wrongpassword");
            exit();
        }
        elseif($checkPass == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ? AND passcode = ?;');

            if(!$stmt->execute(array($email, $passcode))){
                $stmt = null;
                header("location: ../Login.html?error=stmtfailed");
                exit();
            }

            if(!$stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../Login.html?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['id'] = $user[0]["id"];
            $_SESSION['email'] = $user[0]["email"];


        }

        $stmt = null;
    }



 

}




