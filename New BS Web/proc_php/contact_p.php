<?php

if(isset($_POST["submitForm"])){

    //grabbing data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $issue = $_POST["issue"];
 

    require_once 'dbh_p.php';
    require_once 'functions_p.php';

    if(emptyInputContact($fname, $lname, $email, $message) !== false){
        header("location: ../Contact Us.php?error=emptyinput");
        exit();
    }

    if($issue == 'none'){
        header("location: ../Contact Us.php?error=selectissue");
        exit();
    }
  

    sendFeedback($conn, $issue, $fname, $lname, $email, $message);
   
}
else{
    header("location: ../Contact Us.php");
    exit();
}


