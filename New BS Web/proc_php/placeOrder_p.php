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
    $orderNum;
    $i;

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

    $query = mysqli_query($conn, "SELECT MAX(order_id) FROM orders");
    $result = mysqli_fetch_array($query);
    $orderNum = $result['MAX(order_id)'];

    

    for($i=0;$i<8;$i=$i+1){
        if($_SESSION["quantity"][$i]>0){
            addItems($conn, $orderNum, $_SESSION["quantity"][$i], $_SESSION["items"][$i], $_SESSION["price"][$i]);
        }
    }
    
    paymentInfo($conn, $orderNum, $cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone);    
    


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
        $orderNum;
        $items[8] = $_SESSION["items"];
        $quantity[8] = $_SESSION["quantity"];
        $i;
    
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

        $query = mysqli_query($conn, "SELECT MAX(order_id) FROM orders");
        $result = mysqli_fetch_array($query);
        $orderNum = $result['MAX(order_id)'];

        for($i=0;$i<8;$i=$i+1){
            if($_SESSION["quantity"][$i]>0){
                addItems($conn, $orderNum, $_SESSION["quantity"][$i], $_SESSION["items"][$i], $_SESSION["price"][$i]);
            }
        }

        shippingInfo($conn, $orderNum, $fnameShip, $lnameShip, $addressShip, $cityShip, $zipcodeShip, $addInfo);
            
        paymentInfo($conn, $orderNum, $cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone);
        
        header("location: ../Invoice.php");
        exit();

        }