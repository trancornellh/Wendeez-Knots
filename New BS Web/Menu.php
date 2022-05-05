<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
                        <a class="nav-link active" aria-current="page" href="Menu.php">Menu</a>
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

    <!--Image Text Grid-->
    <div class="container-fluid g-0">
        <div class="d-lg-flex mx-4 my-4">
            <div class="col-xl-2 col-lg-2 col-md-2" style="border:1px solid #ddd">
                <img src="Images/Menu Giannis Order.png" alt="Burger" class="img-fluid" />
            </div>
            <div class="col" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>Giannis' Order</h1>
                    <h1>$19.99</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    Giannis' Order consists of the Greek Freak Burger, Greek Freak Fries,
                    Golden Garlic Knots and a Soda of your choice. Giannis likes Sprite!
                </p>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-2" style="border:1px solid #ddd">
                <img src="Images/Menu Hearty Sunrise.png" alt="Fries" class="img-fluid" />
            </div>
            <div class="col" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>The Hearty Sunrise</h1>
                    <h1>$14.99</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    LIMITED TIME! The Hearty Sunrise consists of 1/2 lb beef patty, sunny
                    side up egg, bacon, lettuce, american cheese and pickles. It has the
                    chef special white sauce. The chef special sauce is made fresh daily.
                </p>
            </div>
        </div>

        <div class="d-lg-flex mx-4 mb-4">
            <div class="col-xl-2 col-lg-2 col-md-2" style="border:1px solid #ddd">
                <img src="Images/Menu Burger.png" alt="Burger" class="img-fluid" />
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>Greek Freak Burger</h1>
                    <h1>$11.99</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    The Greek Freak Burger consists of tomato, bacon, onion, american
                    cheese, lettuce, and 1/2 lb meat patty sandwiched between sesame buns.
                    We use our special formula of 85% chuck and 15% sirloin for our
                    beef patty. This allows for the beefy flavor to burst out with how juicy it is.
                    Our burgers are grass fed locally for the highest quality beef.
                </p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 g-0" style="border:1px solid #ddd">
                <img src="Images/Menu Cheese Pizza.jpg" alt="Fries" class="img-fluid" />
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>Cheese Pizza</h1>
                    <h1>$9.99</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    Our cheese pizza consists of our special pizza dough and
                    mozzarella cheese. Under the cheese is the chef special white sauce.
                    Extra white sauce available upon request. Comes with meaty or 
                    vegetarian marinara sauce.
                </p>
            </div>
        </div>

        <div class="d-lg-flex mx-4 mb-4">
            <div class="col-xl-2 col-lg-2 col-md-2 g-0" style="border:1px solid #ddd">
                <img src="Images/Menu Garlic Knots.png" alt="Garlic Knots" class="img-fluid" />
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>Golden Garlic Knots</h1>
                    <h1>$7.99</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    Wendeez Famous Garlic Knots are homemade to be extra soft and fluffy.
                    We use our special pizza dough and top it off with flavorful garlic herb
                    butter before and after baking. These are the best garlic knots by far
                    and we are knot even kidding! Comes with meaty or vegetarian marinara sauce.
                </p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 g-0" style="border:1px solid #ddd">
                <img src="Images/Menu Fries.png" alt="Fries" class="img-fluid" />
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>Greek Freak Fries</h1>
                    <h1>$4.99</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    Our Greek Freak Fries are sourced weekly and locally from Seabreeze
                    Family Farm. We double fry our fries in canola oil allowing for the
                    fry to be crispy on the outside and fluffy on the inside.
                </p>
            </div>
        </div>

        <div class="d-lg-flex mx-4 mb-4">
            <div class="col-xl-2 col-lg-2 col-md-2 g-0" style="border:1px solid #ddd">
                <img src="Images/Menu Salad.jpg" alt="Garlic Knots" class="img-fluid" />
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>Greek Salad</h1>
                    <h1>$5.99</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    The Greek Salad consists of tomatoes, green bell pepper,
                    red onion, olives and feta cheese.
                </p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 g-0" style="border:1px solid #ddd">
                <img src="Images/Menu Soda.png" alt="Fries" class="img-fluid" />
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4" style="border:1px solid #ddd">
                <div class="d-flex justify-content-between p-2">
                    <h1>Soda</h1>
                    <h1>$1.49</h1>
                </div>
                <div style="clear: both;"></div>
                <p class="p-2">
                    We currently carry 4 soda varieties. Coca Cola, MUG Root Beer, Orange Fanta and Sprite!
                </p>
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

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>