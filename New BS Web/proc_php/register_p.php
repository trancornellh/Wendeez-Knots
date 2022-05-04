<?php

if(isset($_POST["submit"])){

    //grabbing data
    $email = $_POST["email"];
    $passcode = $_POST["passcode"];
    $rptpasscode = $_POST["rptpasscode"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    require_once 'dbh_p.php';
    require_once 'functions_p.php';

    if(emptyInputRegister($email, $passcode, $rptpasscode, $fname, $lname) !== false){
        header("location: ../Register.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../Register.php?error=invalidemail");
        exit();
    }

    if(passwordMatch($passcode, $rptpasscode) !== false){
        header("location: ../Register.php?error=passdontmatch");
        exit();
    }

    if(emailExists($conn, $email) !== false){
        header("location: ../Register.php?error=emailtaken");
        exit();
    }

    createUser($conn, $email, $passcode, $fname, $lname);

   
}
else{
    header("location: ../Register.php");
    exit();
}


