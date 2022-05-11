<?php
session_start();

$items[] = $_SESSION["items"];
$quantity[] = $_SESSION["quantity"];
$i;

/*
if(isset($_POST['btn0'])){
    $_SESSION["quantity"][0] = $_SESSION["quantity"][0] + $_POST["item0"];
}
*/