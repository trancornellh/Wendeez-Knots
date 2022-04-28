<?php

if(isset($_POST["submit"])){

    //grabbing data
    $email = $_POST["email"];
    $passcode = $_POST["passcode"];

    //instantiate LoginContr class
     include "classes/dbh.classes.php";
     include "classes/login.classes.php";
     include "classes/login-contr.classes.php";
    $login = new LoginContr($email, $passcode);

    //running error handlers
    $login->loginUser();

    //going back to front page
    header("location: ../hometest.php");
}


