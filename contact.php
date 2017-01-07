<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mehmet Sesen - A Software/Web Developer with a bit of design skills based in London, United Kingdom.</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Main-->
	<link href="css/main.css" rel="stylesheet">

</head>

<body>
	<div class="notification-bar"></div>

	<!--Get Main Menu-->
	<?php include_once "templates/main_nav.php"; ?>

	<!-- Page Title -->
	<div class="container-fluid hero-container-projects">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h1><span>&lt;</span> CONTACT ME <span>/&gt;</span></h1>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Info -->
	<div id="contact-section" class="container-fluid contact-section-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h3>Find Me</h3>
					<table>
						<tr>
							<td><img src="images/icon-home.png"></td>
							<td>
								<p>London, GB</p>
							</td>
						</tr>
						<tr>
							<td><img src="images/icon-tel.png"></td>
							<td>
								<p>075 9908 7048</p>
							</td>
						</tr>
						<tr>
							<td><img src="images/icon-email.png"></td>
							<td>
								<p>hello@msesen.com</p>
							</td>
						</tr>
						<tr>
							<td><img src="images/icon-web.png"></td>
							<td>
								<p>www.msesen.com</p>
							</td>
						</tr>
					</table>
					<table>
						<tr class="social-icons">
							<td><a href="https://www.facebook.com/mhmtssn" target="_blank"><img src="images/icon-facebook.png" alt="Facebook"></a></td>
							<td><a href="https://twitter.com/mhmtssn" target="_blank"><img src="images/icon-twitter.png" alt="Twitter"></a></td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 contactform-container">
					<h3>Message Me</h3>
					<form class="contact-form">
						<input type="text" name="name" id="name" placeholder="Name">
						<input type="text" name="email" id="email" placeholder="E-mail">
						<input type="text" name="subject" id="subject" placeholder="Subject">
						<textarea rows="10" name="message" id="message" placeholder="Type your message here..."></textarea>
						<button type="submit" id="contactform-btn">Send Message</button>
					</form>
				</div>
				<!-- Google Map -->
				<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<br><br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.4733937704!2d-0.24167970079314724!3d51.528558243442156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1483450172557" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>-->
			</div>
		</div>
	</div>

	<!-- Loading animation -->
	<img class="img-loading" src="images/loading.gif" alt="Loading">

	<!--Get Footer-->
	<?php include_once "templates/footer.php"; ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Bootstrap - Needs jQuery -->
	<script src="js/bootstrap.js"></script>

	<!-- Waypoints JQuery plugin -->
	<script src="js/waypoints.min.js"></script>

	<!--Main Javascript file -->
	<script src="js/main.js"></script>

</body>

</html>