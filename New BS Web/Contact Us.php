<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
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
		h1 {
			color: #00471B;
			font-size: 400%;
			border-bottom: 2px solid black;
		}

		.p-t {
			color: black;
			font-size: 140%;
		}

		.contact-form {
			max-width: 800px;
			margin: auto;
			border: 2px solid #333;
			padding: 2rem;
			border-radius: 5px;
			background-color: rgb(3, 110, 17, .6);
		}

		.contact-label {
			display: block;
			margin: .5rem 0;
			background-color: transparent;
			color: black;
		}

		.contact-input {
			display: block;
			width: 250px;
			margin: .5rem 0;
			padding: .5rem;
			border: 2px solid #333;
			border-radius: 5px;
		}

		.contact-textarea {
			display: block;
			width: 300px;
			padding: 2rem;
			border: 2px solid #333;
			border-radius: 5px;
		}

		.center {
			text-align: center;
		}

		.small-line {
			margin: 3rem 0;
		}

		.social-media {
			border: 2px solid black;
			border-radius: 50px;
			margin-top: 20px;
			margin-left: 10px;
			margin-right: 10px;
			width: 30px;
			height: 30px;
		}

		#email-link {
			font-size: 20px;
			color: black;
			text-transform: uppercase;
			text-decoration: underline;
		}
	</style>

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
						<a class="nav-link active" aria-current="page" href="Contact Us.php">Contact Us</a>
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
			<div class=div class="col-12 col-md-9 col-lg-7 col-xl-6">
				<h1 style="text-align:center;">Contact Us</h1>
				<p class="p-t mt-3" style="text-align:center;">
					Have questions? Don't hesitate to contact us regarding any comments, issues, or feedback!
				</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
	    <form action = "proc_php/contact_p.php" method="post" class="contact-form mb-3">
		    <div class="row mb-3">
			    <div class="col">
				    <select name="issue" class="form-select form-select-lg" aria-label=".form-select-lg example">
					    <option name="x" value="none" selected>Select Issue Here</option>
					    <option name="f" value="feedback">Restaurant Feedback/Complaints</option>
					    <option name="i" value="inquiry">General Inquiry</option>
					    <option name="o" value="other">Other Issue</option>
				    </select>
			    </div>
		    </div>

			<!-- Name input -->
			<div class="row mb-3">
				<div class="col">
					<input name ="fname" class="form-control form-control-lg" id="first-name" type="text" placeholder="First Name" />
				</div>
				<div class="col">
					<input name="lname" class="form-control form-control-lg" id="last-name" type="text" placeholder="Last Name" />
				</div>
			</div>

			<!-- Email address input -->
			<div class="row mb-3">
				<div class="col">
					<input name="email" class="form-control form-control-lg" id="email" type="email" placeholder="Email Address" />
				</div>
			</div>

			<!-- Message input -->
			<div class="row mb-3">
				<div class="col">
					<textarea name="message" class="form-control form-control-lg" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
				</div>
			</div>

			 <!--Error Messages-->
			<?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p class='lead text-center'><strong>***Fill in all fields***</p>";
                    }
					else if($_GET["error"] == "selectissue"){
                        echo "<p class='lead text-center'><strong>***Select an issue***</p>";
                    }
				}
            ?>
			<!-- Form submit button -->
			<div class="d-grid mb-3">
			  <button name="submitForm" class="btn btn-success btn-outline-success btn-lg btn-block" type="submit">Submit</button>
			</div>

			<div class="center">
				<a id="email-link" href="mailto:support@wendeezknots.com">support@wendeezknots.com</a>
			</div>

			<div class="social-media-links center" style="text-align:center;">
				<img class="social-media" src="Images/facebook_logo.png" alt="Facebook">
				<img class="social-media" src="Images/instagram_logo.png" alt="Instagram">
				<img class="social-media" src="Images/twitter_logo.png" alt="Twitter">
				<a target="_blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
					<img class="social-media" src="Images/youtube_logo.png" alt="YouTube">
				</a>
			</div>
		</form>
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