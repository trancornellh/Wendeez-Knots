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

function emailTaken($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../BS Web/Register.html?error=stmtfailed");
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
        header("location: ../BS Web/Register.html?error=stmtfailed");
        exit();
    }

    $hashedPWD = password_hash($passcode, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $email, $hashedPWD, $fname, $lname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../BS Web/Register.html");
    exit();

}

