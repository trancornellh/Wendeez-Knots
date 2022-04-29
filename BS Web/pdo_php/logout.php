<?php

session_start();
session_unset();
session_destroy();

//send to home page
header("location: ../Home.html");


