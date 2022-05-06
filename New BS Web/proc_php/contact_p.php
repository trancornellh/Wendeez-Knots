<?php

if(isset($_POST["submitForm"])){

    //grabbing data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
 

    require_once 'dbh_p.php';
    require_once 'functions_p.php';

    
    
    sendFeedback($conn, $issue, $fname, $lname, $email, $message);
   
}
else{
    header("location: ../Contact Us.php");
    exit();
}


