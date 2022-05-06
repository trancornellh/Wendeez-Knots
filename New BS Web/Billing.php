<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="icon" type="image/png" sizes="16x16 32x32 64x64" href="Images/favicon.png">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap CSS-->
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
                        <a class="nav-link" href="Home.php">Home</a>
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
    <!--Navigation Bar-->
    <!--Credit Card Form-->
    <div class="container-fluid mt-3 mb-3">
        <div class="row justify-content-md-left">
            <div class="col md-1">
                <a class="btn btn-success btn-outline-success btn-lg btn-block" href="Order Delivery.php" role="button">Back to Cart</a>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-3">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card mb-7">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Billing Details</h5>
                    </div>
                    <div class="card-body">
                        <form id="billingForm" action="proc_php/placeOrder_p.php" method="post">

                            <?php
                                echo "<p style ='font-size: xx-large' class='text-center text-large'>User: " . $_SESSION["userEmail"] . "</p>";
                            ?>

                            <hr>

                            <!--Text Inputs for First and Last Names-->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="firstname" id="firstname" class="form-control form-control-lg" placeholder="First Name"
                                                aria-label="First Name" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="lastname" id="lastname" class="form-control form-control-lg" placeholder="Last Name"
                                                aria-label="Last Name" />
                                    </div>
                                </div>
                            </div>

                            <!--Text Input-->
                            <div class="form-outline mb-4">
                                <input type="text" name="address" id="address" class="form-control form-control-lg" placeholder="Address" aria-label="Address" />
                            </div>

                            <!--Text Input-->
                            <div class="form-outline mb-4">
                                <input type="text" name="city" id="address" class="form-control form-control-lg" placeholder="City" aria-label="City" />
                            </div>

                            <!--Number Input-->
                            <div class="form-outline mb-4">
                                <input type="number" name="zipcode" id="zipcode" class="form-control form-control-lg" placeholder="Zipcode" aria-label="Zipcode" />
                            </div>

                            <!--Number Input-->
                            <div class="form-outline mb-4">
                                <input type="number" name="phone" id="phone" class="form-control form-control-lg" placeholder="Phone" aria-label="Phone" />
                            </div>

                            <hr class="my-4" />

                            <h5 class="mb-4">Payment</h5>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input name="cardname" type="text" id="formNameOnCard" class="form-control form-control-lg" placeholder="Name on Card" aria-label="Name on Card" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group form-outline">
                                        <input name="cardnum" type="text" id="formCardNumber" class="form-control form-control-lg" placeholder="Credit Card Number"
                                                aria-label="Credit Card Number" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-3">
                                    <div class="form-outline">
                                        <input name="expdate" type="text" id="formExpiration" class="form-control form-control-lg" placeholder="Expiration Date"
                                                aria-label="Expiration Date" />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group form-outline">
                                        <input name="cardpin" type="text" id="formCVV" class="form-control form-control-lg" placeholder="CVV" aria-label="CVV" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <button name="placeOrderPickup" form="billingForm" class="yay btn btn-success btn-outline-success btn-lg btn-block" type="submit">
                                        Confirm Payment
                                    </button>
                                </div>
                                <div class="col-3">
                                   <?php
                                        if(isset($_GET["error"])){
                                            if($_GET["error"] == ("emptyinputorder" || "emptyinputpayment" || "emptyinputshipping")){
                                                echo "<p class='lead text-danger'><strong>Fill in all fields</strong></p>";
                                            }
                                        }
                                    ?> 
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                <p id="food"></p>
                                <span><p id="cost"></p></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Knot Delivery</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 ">
                            <div></div>
                                <span><p id="tax"></p></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div></div>
                                <span><strong id="total"></strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--Credit Card Form-->
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
        <!--Footer-->
        <!--Bootstrap JavaScript-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--Bootstrap JavaScript-->
        <script src="Script1.js"></script>
</body>
</html>