<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
                        <a class="nav-link" href="Menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Order Delivery.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="About Us.php">About Us</a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 g-0" style="border:1px solid #ddd">
                <img src="Images/Giannis.png" alt="Giannis" class="img-fluid" />
            </div>

            <div class="col-xl-8 col-lg-8 col-md-8" style="border:1px solid #ddd">
                <h1>Giannis Sina Ugo Antetokounmpo</h1>
                <p>
                    Giannis Sina Ugo Antetokounmpo is a Greek professional basketball player for the Milwaukee Bucks
                    of the National Basketball Association. Antetokounmpo's nationality, in addition to his size,
                    speed and ball-handling skills have earned him the nickname "Greek Freak".
                    <br><br>
                    Born and raised in Athens to Nigerian immigrants, Antetokounmpo began playing basketball for
                    the youth teams of Filathlitikos in Athens. In 2011, he began playing for the club's senior
                    team before entering the 2013 NBA draft, where he was selected 15th overall by the Bucks. In
                    2016???17 he led the Bucks in all five major statistical categories and became the first player
                    in NBA history to finish a regular season in the top 20 in all five statistics of total points,
                    rebounds, assists, steals, and blocks. He received the Most Improved Player award in 2017.
                    Antetokounmpo has received six All-Star selections, including being selected as an All-Star
                    captain in 2019 and 2020, as he led the Eastern Conference in voting in these two years.
                    <br><br>
                    One of basketball's most decorated players, Antetokounmpo won back-to-back NBA Most Valuable
                    Player Awards in 2019 and 2020, joining Kareem Abdul-Jabbar and LeBron James as the only players
                    in NBA history to win two MVPs before turning 26. Along with his MVP award, he was also named the
                    NBA Defensive Player of the Year in 2020, becoming only the third player after Michael Jordan (1988)
                    and Hakeem Olajuwon (1994) to win both awards in the same season. In 2021, Antetokounmpo led the Bucks
                    to their first NBA championship since 1971 and was named Finals MVP. The same year, he was selected on
                    the NBA 75th Anniversary Team.
                    <br><br>
                    All credited to Giannis Wikipedia.
                    <a href="https://en.wikipedia.org/wiki/Giannis_Antetokounmpo">Giannis Antetokounmpo Wikipedia Link</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 g-0" style="border:1px solid #ddd">
                <img src="Images/GarlicKnots.jpg" alt="Garlic Knots" class="img-fluid" />
            </div>

            <div class="col-xl-8 col-lg-8 col-md-8" style="border:1px solid #ddd">
                <h1>Wendeez Famous Garlic Knots</h1>
                <p>
                    Our homemade garlic knots are extra fluffy and soft. They are made with
                    Giannis' favorite 6 ingredient pizza dough topped off with our famous
                    flavorful garlic herb butter both before AND after baking.
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
            ?? 2022 Copyright:
            <a class="text-white" href="Home.php">Wendeez Knots</a>
        </div>
    </footer>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>