<?php

if(isset($_POST["submit"])){


    $email = $_POST["email"];
    $passcode = $_POST["passcode"];
   

    require_once 'dbh_p.php';
    require_once 'functions_p.php';

    if(emptyInputLogin($email, $passcode) !== false){
        header("location: ../Login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $passcode);

}
else{
    header("location:../Login.php");
}