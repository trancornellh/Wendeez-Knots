<?php

if(isset($_POST["submit"])){

    //grabbing data
    $email = $_POST["email"];
    $passcode = $_POST["passcode"];
    $rptpasscode = $_POST["rptpasscode"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    //instantiate RegisterContr class
     include "classes/dbh.classes.php";
     include "classes/register.classes.php";
     include "classes/register-contr.classes.php";
    $register = new RegisterContr($email, $passcode, $rptpasscode, $fname, $lname);

    //running error handlers
    $register->registerUser();

    //going back to front page
    header("location: ../index.php?error=none");
}


?>