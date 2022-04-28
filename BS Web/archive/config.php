<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'wendeezknots');


//server connection
$mysqli = new mysqli("DB_SERVER", "DB_USER", "DB_PASS", "DB_NAME");

//check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>