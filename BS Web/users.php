<?php

//server connection
$mysqli = new mysqli("localhost", "root", "", "wendeezknots");

//check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}




$mysqli->close();



/*
$username = $_POST['username'];
$password = $_POST['passcode'];



if(!empty($username) && !empty($passcode)) {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "wendeezknots";

    //create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

   // $link = mysqli_connect("localhost", "root", "", "wendeezknots");

    if($conn->connect_error){
        die('Connect Failed : '.$conn->connect_error;
    }

    else {

        $sql = "SELECT username FROM users";
        

        $sql = "INSERT INTO users(username, passcode)
        values('$username', '$passcode')";

        if($conn->query($sql)){
            echo "New user created";
        }
        else{
            echo "Error: ". sql . "<br>". $conn->error;
        }
        $conn->close();
        

       /* $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum = $stmt->num_rows;*/

        /*if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ss", $username, $passcode);
            $stmt->execute();
            echo "New user created";
        }
        else {
            echo "Username has been taken";
        }*/

       

/*

    }

}

else {
    echo "Username and password do not match";
    die();
}

*/

?>