<?php

$username = $_POST['username'];
$password = $_POST['passcode'];

if(!empty($username) && !empty($passcode)) {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "wendeezknots";

    //create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if($conn->connect_error){
        die('Connect Failed : '.$conn->connect_error;
    }

    else {
        $SELECT = "SELECT username FROM users";
        $INSERT = "INSERT INTO users(username, passcode) values($username, $passcode)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ss", $username, $passcode);
            $stmt->execute();
            echo "New user created";
        }
        else {
            echo "Username has been taken";
        }

        $stmt->close();
        $conn->close();



    }

}

else {
    echo "Username and password do not match";
    die();
}



?>