<?php

session_start();

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
        <!--Offset White for Eyes-->
        <style>
            body 
            {
                background-color: #fffdfa;
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
                font-size: 300%;
                font-weight: bold;
            }

            .p-d {
                font-size: 140%;
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
                <a class="navbar-brand fs-3" href="Home.html">Wendeez Knots</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Menu.html">Menu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Order
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Pickup</a></li>
                                <li><a class="dropdown-item" href="Order Delivery.html">Delivery</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About Us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact Us.html">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="email" placeholder="Email" aria-label="Email">
                        <input class="form-control me-2" type="password" placeholder="Password" aria-label="Password">
                        <a class="btn btn-outline-light me-2" href="Register.html" role="button">Register</a>
                        <button class="btn btn-outline-light" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid"> 
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 g-0" >
					<a href="Order Delivery.html">
						<img class="img-fluid" src=Images/hearty-sunrise.jpg>
					</a>
				</div>
			</div>
        </div>

        <div class="container" style="margin-top: 50px; background-color: #EEE1C6; height: 400%">
            <div class="row">
                <p style="font-size:10px">&nbsp;</p>
                <div class="col-xl-5 col-lg-4 col-md-4 g-10">
                    <img src="Images/food_deals.jpg" id="deals" class="img-fluid" />
                </div>
				
                <div class="col-xl-7 col-lg-7 col-md-7 g-0">
                    <h2 class="h2-d">WK Deals</h2>
                    <p style="font-size:1px">&nbsp;</p>
                    <p class="p-d"> Why waste money on small portions? Check out our exclusive deals including some of Wendeez Knots favorites</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p class="disclaimer"> *Only available at participating locations and online orders</p>
                    <input class="homebutton" type="submit" onclick="window.location.href='Deals.html';" value="Get Deals" id="dealsBtn"> <!--will add functionallity to this button-->
                </div>
				 <p style="font-size:10px">&nbsp;</p>
            </div>
        </div>

        <p>&nbsp;</p>

        <div class="container" style="margin-top: 50px; background-color: #EEE1C6; height: 400%">
            <div class="row">
                <p>&nbsp;</p>
                <div class="col-xl-7 col-lg-7 col-md-7 g-0">
                    <h2 class="h2-d">Giannis' Order</h2>
                    <p style="font-size:1px">&nbsp;</p>
                    <p class="p-d"> Ever wondered what if feels like being an NBA Champ? Try ordering the Giannis Antetokounmpo's special order</p>
                    <p>&nbsp;</p>
                    <p class="p-d">You Wont regret it!</p>
                    <p>&nbsp;</p>
                    <input class="homebutton" type="submit" onclick="window.location.href='Order Delivery.html';" value="Order Now" id="dealsBtn"> <!--will add functionallity to this button-->
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1 g-0"></div>
                <div class="col-xl-4 col-lg-4 col-md-4 g-0">
                    <img src="Images/giannis-eating.jpg" width=320 height=320 id="gns_eating" class="img-fluid">
                </div>
            </div>
        </div>


        <p>&nbsp;</p>

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
                <a class="text-white" href="Home.html">Wendeez Knots</a>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>