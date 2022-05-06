<?php

if(isset($_POST["placeOrder"])){


    $fnameBilling = $_POST["firstname"];
    $lnameBilling = $_POST["lastname"];
    $addressBilling = $_POST["address"];
    $cityBilling = $_POST["city"];
    $zipcodeBilling = $_POST["zipcode"];
    $phoneBilling = $_POST["phone"];

    require_once 'shipping_p.php';
    require_once 'dbh_p.php';
    require_once 'functions_p.php';

    
    
    header("location: ../Invoice.php");
    
    }