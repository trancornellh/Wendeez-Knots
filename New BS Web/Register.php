<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00471b;">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="Home.php">Wendeez Knots</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Home.php">Home</a>
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
                <form class="d-flex">
                    <a class="btn btn-outline-light me-2" href="Register.php" role="button">Register</a>
                    <a class="btn btn-outline-light" href="Login.php" role="button">Login</a>
                </form>
            </div>
        </div>
    </nav>

    <!--Register-->
    <section class="vh-100 bg-image shadow-2-strong"
             style="background-image: url('Images/Homey.png');">
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an Account</h2>

                                <form action="proc_php/register_p.php" method="post">

                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" name="fname" id="form3Example1" class="form-control form-control-lg" placeholder="First Name" aria-label="First Name"/>
                                                
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" name="lname" id="form3Example2" class="form-control form-control-lg" placeholder="Last Name" aria-label="Last Name"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Your Email" aria-label="Your Email"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="passcode" id="form3Example4cg" class="form-control form-control-lg" placeholder="Password" aria-label="Password"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="rptpasscode" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Repeat Password" aria-label="Repeat Password"/>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree to all the statements in the <a href="#!" class="text-body"><u>Terms of Service</u></a>
                                        </label>
                                    </div>

                                    <!--Error Messages-->
                                    <?php
                                    if(isset($_GET["error"])){
                                        if($_GET["error"] == "emptyinput"){
                                            echo "<p class='lead text-danger text-center'><strong>Fill in all fields</p>";
                                        }
                                        else if($_GET["error"] == "invalidemail"){
                                            echo "<p class='lead text-danger text-center'><strong>Invalid Email</p>";
                                        }
                                        else if($_GET["error"] == "passdontmatch"){
                                            echo "<p class='lead text-danger text-center'><strong>Password does not match</p>";
                                        }
                                        else if($_GET["error"] == "emailtaken"){
                                            echo "<p class='lead text-danger text-center'><strong>Email has been taken</p>";
                                        }
                                    }
                                    ?>

                                    <div class="d-grid gap-2">
                                        <button type="submit" name="submit" class="btn btn-success btn-outline-success btn-lg btn-block">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">
                                        Already have an account? <a href="Login.php"
                                                                    class="fw-bold text-body"><u>Login Here</u></a>
                                    </p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>
</html>