<?php

function emptyInputRegister($email, $passcode, $rptpasscode, $fname, $lname){
    $result='';
    if(empty($email) || empty($passcode) || empty($rptpasscode) || empty($fname) || empty($lname)){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result='';
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}

function passwordMatch($passcode, $rptpasscode){
    $result='';
    if($passcode !== $rptpasscode){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $email, $passcode, $fname, $lname){
    $sql = "INSERT INTO users (email, passcode, fname, lname) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Register.php?error=stmtfailed");
        exit();
    }

    $hashedPWD = password_hash($passcode, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $email, $hashedPWD, $fname, $lname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../Register.php?error=none-success");
    exit();

}

function emptyInputLogin($email, $passcode){
    $result='';
    if(empty($email) || empty($passcode)){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $passcode){
    $emailExists = emailExists($conn, $email);  
    if ($emailExists === false){
        header("location: ../Login.php?error=usernotfound");
        exit();
    }

    $passwordHashed = $emailExists["passcode"];
    $checkPass = password_verify($passcode, $passwordHashed);

    if($checkPass === false){
        header("location: ../Login.php?error=usernotfound");
        exit();
    }

    else if ($checkPass === true){
        session_start();
        $_SESSION["userEmail"] = $emailExists["email"];
        header("location: ../Home.php");
        exit();
        //echo "Logged In";
    }
}

function retrieveCart(){}

function shippingInfo($conn, $fnameShip, $lnameShip, $addressShip, $cityShip, $zipcodeShip, $addInfo){
    $sql = "INSERT INTO shipping (fname, lname, address, city, zipcode, addInfo) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Order Delivery.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssss", $fnameShip, $lnameShip, $addressShip, $cityShip, $zipcodeShip, $addInfo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

/*function billingInfo($conn, $addressBilling, $cityBilling, $zipcodeBilling, $phone){
    $sql = "INSERT INTO payment_info (address, city, zipcode, phone) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Order Delivery.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssss", $addressBilling, $cityBilling, $zipcodeBilling, $phone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}*/

function paymentInfo($conn,$cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone){
    $sql = "INSERT INTO payment_info (cardname, card_number, expdate, pin, address, city, zipcode, phone) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Order Delivery.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssss", $cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function placeOrder($conn, $fname, $lname, $orderEmail){
    $query = mysqli_query($conn, "SELECT id FROM users WHERE email = '". $orderEmail ."';");
    $custID = mysqli_fetch_assoc($query);

    $sql = "INSERT INTO orders (customer_id, cust_fname, cust_lname) VALUES (".$custID["id"].",?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Order Delivery.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $fname, $lname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function createOrderNum($conn){
    mysqli_query($conn, "UPDATE orders SET order_num = order_id");
}

function emptyInputShip($fnameShip, $lnameShip, $addressShip, $cityShip, $zipcodeShip){
    $result='';
    if(empty($fnameShip) || empty($lnameShip) || empty($addressShip) || empty($cityShip) || empty($zipcodeShip)){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emptyInputPayment($cardName, $cardNum, $expDate, $cardPin, $addressBilling, $cityBilling, $zipcodeBilling, $phone){
    $result='';
    if(empty($cardName) || empty($cardNum) || empty($expDate) || empty($cardPin) || empty($addressBilling) || empty($cityBilling) || empty($zipcodeBilling) || empty($phone)){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emptyInputOrder($fname, $lname){
    $result='';
    if(empty($fname) || empty($lname)){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}



function sendFeedback($conn, $issue, $fname, $lname, $email, $message){
    $sql = "INSERT INTO contact (issue, fname, lname, email, message) VALUES (?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Contact Us.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss", $issue, $fname, $lname, $email, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../Contact Us.php");
    exit();

}

function emptyInputContact($fname, $lname, $email, $message){
    $result='';
    if(empty($fname) || empty($lname) || empty($email) || empty($message)){
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;
}

/*function cart($conn){
    $name = mysqli_query($conn, "SELECT item_name FROM menu WHERE item_id = '". $orderEmail ."';");
    $price = mysqli_query($conn, "SELECT item_price FROM menu WHERE item_id = '". $orderEmail ."';");
    $custID = mysqli_fetch_assoc($query);

    $sql = "INSERT INTO orders (customer_id, cust_fname, cust_lname) VALUES (".$custID["id"].",?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Order Delivery.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $fname, $lname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}*/

function invoice($conn, $orderNum){
    $invoiceNum = mysqli_query($conn, "SELECT order_num FROM orders WHERE order_id = '". $orderNum ."';");
    $iFname = mysqli_query($conn, "SELECT fname FROM orders WHERE order_id = '". $orderNum ."';");
    $iLname = mysqli_query($conn, "SELECT lname FROM orders WHERE order_id = '". $orderNum ."';");
}
