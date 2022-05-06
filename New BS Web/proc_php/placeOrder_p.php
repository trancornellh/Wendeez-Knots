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

    if(emptyInputOrder($fname, $lname) !== false){
        header("location: ../Billing.php?error=emptyinputorder");
        exit();
    }

    if(emptyInputPayment($cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone) !== false){
        header("location: ../Billing.php?error=emptyinputpayment");
        exit();
    }

    placeOrder($conn, $fname, $lname, $orderEmail);

    //billingInfo($conn, $addressBilling, $cityBilling, $zipcodeBilling, $phone);
    
    paymentInfo($conn,$cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone);    
    
    header("location: ../Invoice.php");
    exit();
    
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

        if(emptyInputShip($fnameShip, $lnameShip, $addressShip, $cityShip, $zipcodeShip) !== false){
            header("location: ../Address.php?error=emptyinputship");
            exit();
        }

        if(emptyInputOrder($fname, $lname) !== false){
            header("location: ../Address.php?error=emptyinputorder");
            exit();
        }
    
        if(emptyInputPayment($cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone) !== false){
            header("location: ../Address.php?error=emptyinputpayment");
            exit();
        }
    
        

        placeOrder($conn, $fname, $lname, $orderEmail);

        shippingInfo($conn, $fnameShip, $lnameShip, $addressShip, $cityShip, $zipcodeShip, $addInfo);
    
        //billingInfo($conn, $addressBilling, $cityBilling, $zipcodeBilling, $phone);
        
        paymentInfo($conn,$cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone);
        
        header("location: ../Invoice.php");
        exit();

        }



    else{
        header("location: ../Order Delivery.php");
        exit();
    }