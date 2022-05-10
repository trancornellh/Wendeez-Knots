<?php
session_start();

$arr_items = array("Giannis' Order", "Greek Freak Burger", "The Hearty Sunrise", "Cheese Pizza", "Golden Garlic Knots
", "Greek Freak Fries", "Greek Salad", "Soda");
$_SESSION["items"] = $arr_items;
$_SESSION["quantity"] = array(1,2,1,2,1,2,1,2);
$_SESSION["price"] = array(19.99, 11.99, 14.99, 9.99, 7.99, 4.99, 5.99, 1.49);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order</title>
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
            .cart-container {
                border: 1px solid #E0E4CC;
                border-radius: 5px;
                margin-top: 1em;
                padding: 1em;
            }
            .productcont {
                display: flex;
            }

            .product {
                padding: 1em;
                border: 1px solid #E0E4CC;
                margin: auto;
                border-radius: 5px;
                height:450px;
                width:290px;
                text-align:center;
            }

            table {
                margin-bottom: 1em;
                border-collapse: collapse;
            }

            table td, table th {
                text-align: left;
                border-bottom: 1px solid #E0E4CC;
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
                            <a class="nav-link active" aria-current="page" href="Order Delivery.php">Order</a>
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

        <?php 
            if(!isset($_SESSION["userEmail"])){
             echo '<script>alert("Must be logged in"); window.location.replace("Login.php");</script>';
            }
        ?>
        <div class="container-fluid">
            <div class="row row-cols-auto align-self-center justify-content-md-center mx-0 my-3">
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname"> Giannis' Order </h3>
                        <img src="Images/Menu Giannis Order.png" alt="Gorder" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name="qty0">
                        <p class="price"> $19.99 </p>
                        <button name ="btn0" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname"> Greek Freak Burger </h3>
                        <img src="Images/Menu Burger.png" alt="Burger" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name="qty1">
                        <p class="price"> $10.99 </p>
                        <button name ="btn1" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname"> The Hearty Sunrise </h3>
                        <img src="Images/Menu Hearty Sunrise.png" alt="HeartyBurger" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name ="qty2">
                        <p class="price"> $14.99 </p>
                        <button name ="btn2" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname"> Cheese Pizza </h3>
                        <img src="Images/Menu Cheese Pizza.jpg" alt="Pizza" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name ="qty3">
                        <p class="price"> $9.99 </p>
                        <button name ="btn3" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname"> Golden Garlic Knots </h3>
                        <img src="Images/Menu Garlic Knots.png" alt="Knots" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name ="qty4">
                        <p class="price"> $7.99 </p>
                        <button name ="btn4" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname"> Greek Freak Fries </h3>
                        <img src="Images/Menu Fries.png" alt="Fries" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name ="qty5">
                        <p class="price"> $4.99 </p>
                        <button name ="btn5" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname">Greek Salad</h3>
                        <img src="Images/Menu Salad.jpg" alt="Salad" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name ="qty6">
                        <p class="price"> $5.99 </p>
                        <button name ="btn6" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
                <div class="col product mx-2 mb-3">
                    <form>
                        <h3 class="productname">Soda</h3>
                        <img src="Images/Menu Soda.png" alt="Soda" class="img-fluid" style="width:220px;height:220px;">
                        <br />
                        <br />
                        <input type="number" class="qty" min="1" value="1" style="width:120px;" name ="qty7">
                        <p class="price"> $1.99 </p>
                        <button name ="btn7" class="addtocart btn btn-success btn-outline-success btn-lg btn-block" style="position: relative; padding: 10px 100px; background-color: #00471b; color:white;">Add</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="cart-container mb-3">
                <h1>Cart</h1>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th class="fs-5" scope="col">Product</th>
                                    <th class="fs-5" scope="col">Quantity</th>
                                    <th class="fs-5" scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody class="fs-5" id="carttable"> </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-5 col-sm-4 col-4 fs-5">
                        <strong>Subtotal</strong>
                        <p class="fs-5" id="total"></p>
                    </div>
                    <div class="col form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadio" id="Pickup" value="Pickup" checked ="checked">
                        <label class="form-check-label" for="Pickup">Pickup</label>
                    </div>
                    <div class="col form-check form-check-inline">
                        <input class="form-check-input"  type="radio" name="inlineRadio" id="Delivery" value="Delivery">
                        <label class="form-check-label"  for="Delivery">Delivery</label>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-3 col-3">
                        <button class="emptycart btn btn-success btn-outline-success btn-lg btn-block" style="background-color:white; color: #00471b;">Empty Cart</button>  
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-4 col-sm-5 col-5">
                        <button class="proceed btn btn-success btn-outline-success btn-lg btn-block" style="background-color: #00471b; color:white;">Proceed to Checkout</button>
                    </div>
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
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="script.js"></script>
    </body>
</html>