
<?php

if(isset($_POST["addressCheckout"])){


$fnameShipping = $_POST["firstname"];
$lnameShipping = $_POST["lastname"];
$addressShipping = $_POST["address"];
$cityShipping = $_POST["city"];
$zipcodeShipping = $_POST["zipcode"];
$phoneShipping = $_POST["phone"];
$addInfo = $_POST["addInfo"];

header("location: ../Billing.php");

}