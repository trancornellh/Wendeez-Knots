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

    header("location: ../Register.php");
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

function retrieveAddress(){}

function retrievePayment(){}