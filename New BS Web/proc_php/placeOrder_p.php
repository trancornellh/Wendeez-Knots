<?php
session_start();
$orderEmail = $_SESSION["userEmail"];

if(isset($_POST["placeOrderPickup"])){

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $addressBilling = $_POST["address"];
    $cityBilling = $_POST["city"];
    $zipcodeBilling = $_POST["zipcode"];
    $phone = $_POST["phone"];
    $cardName = $_POST["cardname"];
    $cardNum = $_POST["cardnum"];
    $expDate = $_POST["expdate"];
    $cardPin = $_POST["cardpin"];

    require_once 'dbh_p.php';
    require_once 'functions_p.php';

    placeOrder($conn, $fname, $lname, $orderEmail);

    //billingInfo($conn, $addressBilling, $cityBilling, $zipcodeBilling, $phone);
    
    paymentInfo($conn,$cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone);    
    orderComplete();
    
    }

    if(isset($_POST["placeOrderDelivery"])){

        $fnameShip = $_POST["firstnameShip"];
        $lnameShip = $_POST["lastnameShip"];
        $addressShip = $_POST["addressShip"];
        $cityShip = $_POST["cityShip"];
        $zipcodeShip = $_POST["zipcodeShip"];
        $addInfo = $_POST["addInfo"];

        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $addressBilling = $_POST["address"];
        $cityBilling = $_POST["city"];
        $zipcodeBilling = $_POST["zipcode"];
        $phone = $_POST["phone"];
        $cardName = $_POST["cardname"];
        $cardNum = $_POST["cardnum"];
        $expDate = $_POST["expdate"];
        $cardPin = $_POST["cardpin"];
    
        require_once 'dbh_p.php';
        require_once 'functions_p.php';
    
        placeOrder($conn, $fname, $lname, $orderEmail);

        shippingInfo($conn, $fnameShip, $lnameShip, $addressShip, $cityShip, $zipcodeShip, $addInfo);
    
        //billingInfo($conn, $addressBilling, $cityBilling, $zipcodeBilling, $phone);
        
        paymentInfo($conn,$cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone);        orderComplete();
        
        }



    else{
        header("location: ../Order Delivery.php");
        exit();
    }