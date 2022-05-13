<?php
session_start();

$arr_items = array("Giannis' Order", "Greek Freak Burger", "The Hearty Sunrise", "Cheese Pizza", "Golden Garlic Knots
", "Greek Freak Fries", "Greek Salad", "Soda");
$_SESSION["items"] = $arr_items;
$_SESSION["quantity"] = array(0,0,0,0,0,0,0,0);
$_SESSION["price"] = array(19.99, 11.99, 14.99, 9.99, 7.99, 4.99, 5.99, 1.49);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" sizes="16x16 32x32 64x64" href="Images/favicon.png">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        /* Sets Backgroud Color for a Less Harsh to Look at White*/
        body {
            background-color: #fffdfa;
        }

        /* Changes Colors of Buttons*/
        .btn-success {
            background-color: #00471b;
            color: #FFF;
        }

        .form-control:focus {
            border-color: #00471b;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        /* In the Number Input Areas, Hides the Up and Down Arrows */
        /* On Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* On Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>
    <style>
        .homebutton {
            display: block;
            width: 250px;
            margin: .5rem 0;
            padding: .5rem;
            border: 2px solid #333;
            border-radius: 5px;
            background-color: #00471B;
            color: white;
        }

        .h2-d {
            text-align: center;
            font-size: 350%;
            font-weight: bold;
        }

        .p-d {
            font-size: 160%;
            font-family: "Lucida Console", "Courier New", monospace;
        }

        .disclaimer {
            font-size: 70%;
            font-family: "Lucida Console", "Courier New", monospace;
        }
    </style>

    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00471b;">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 p-0" href="Home.php">
                <img src="Images/Burger Logo.svg" width="42" height="42" class="d-inline-block align-top" alt="">
                Wendeez Knots
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Order Delivery.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About Us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact Us.php">Contact Us</a>
                    </li>
                </ul>
                <!--Entry and Buttons for Login/Register and Logout-->
                <?php 
                    if(isset($_SESSION["userEmail"])){
                        echo "<li class='d-flex'>
                        <a class='btn btn-outline-light' href='proc_php/logout_p.php'>Log Out</a>
                        </li>";
                    }
                    else{
                        echo "<li class='d-flex'>
                        <a class='btn btn-outline-light me-2' href='Register.php'>Register</a>
                        </li>";
                        echo "<li class='d-flex'>
                        <a class='btn btn-outline-light' href='Login.php'>Log in</a>
                        </li>";
                    }
                
                ?>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 g-0">
                <a href="Order Delivery.php">
                    <img class="img-fluid" src=Images/hearty-sunrise.jpg>
                </a>
            </div>
        </div>
    </div>

    <div class="containter-fluid p-5 mx-5 my-5" style="background-color: #EEE1C6;">
        <div class="row justify-content-md-center g-0">
            <div class="col-3">
                <img src="Images/giannis-holdingtrophy.jpg" id="deals" class="img-fluid" />
            </div>
            <div class="col-md-auto">
                <h1 class="h2-d text-center">NBA Playoffs</h1>
                <p class="mx-3 p-d">Bucks fans!</p>
                <p class="mx-3 p-d">The playoffs are here. From the tipoff to the final buzzer, we got you covered.</p>
                <p class="mx-3 p-d">Enjoy the $0 delivery fee</p>
            </div>
        </div>
    </div>

    <div class="containter-fluid p-5 mx-5 my-5" style="background-color: #EEE1C6;">
        <div class="row justify-content-md-center g-0">
            <div class="col-9">
                <h1 class="h2-d text-center">Giannis' Order</h1>
                <p class="mx-3 p-d">Ever wondered what if feels like being an NBA Champ? Try ordering Giannis' special order!</p>
                <p class="mx-3 p-d">You won't regret it!</p>
                <a class="mx-3 btn btn-success btn-outline-success btn-lg btn-block" href="Order Delivery.php" role="button">Order Here</a>
            </div>
            <div class="col-3">
                <img src="Images/giannis-eating.jpg" id="deals" class="img-fluid" />
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="text-white text-center text-lg-start" style="background-color: #00471b;">
        <div class="container p-3">
            <div class="row mt-1">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 g-0">
                    <h5 class="text-uppercase mb-4">About company</h5>

                    <p>
                        Wendeez Knots is a family owned comfort restaurant.
                        We were inspired by Giannis Antetokounmpo's love for
                        food and wanted to dedicate our theme towards him.
                    </p>

                    <p>
                        Come enjoy our food!
                    </p>

                </div>
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0 g-0">
                    <h5 class="text-uppercase mb-4">Opening hours</h5>

                    <table class="table text-center text-white">
                        <tbody class="fw-normal">
                            <tr>
                                <td>Monday - Thursday:</td>
                                <td>9 AM - 9 PM</td>
                            </tr>
                            <tr>
                                <td>Friday - Saturday:</td>
                                <td>8 AM - 12 AM</td>
                            </tr>
                            <tr>
                                <td>Sunday:</td>
                                <td>CLOSED</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="Home.php">Wendeez Knots</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="Script2.js"></script>
</body>
</html>