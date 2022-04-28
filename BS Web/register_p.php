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
        header("location: ../BS Web/Register.html?error=emptyinput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../BS Web/Register.html?error=invalidemail");
        exit();
    }

    if(passwordMatch($passcode, $rptpasscode) !== false){
        header("location: ../BS Web/Register.html?error=passdontmatch");
        exit();
    }

    if(emailTaken($conn, $email) !== false){
        header("location: ../BS Web/Register.html?error=emailtaken");
        exit();
    }

    createUser($conn, $email, $passcode, $fname, $lname);

   
}
else{
    header("location: ../BS Web/Register.html");
    exit();
}


