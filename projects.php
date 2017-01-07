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

	<!--Get Main Menu-->
	<?php include_once "templates/main_nav.php"; ?>

	<!-- Page Title -->
	<div class="container-fluid hero-container-projects">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h1><span>&lt;</span> RECENT WORK <span>/&gt;</span></h1>
				</div>
			</div>
		</div>
	</div>
	
	<!--Tabs-->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1>Projects</h1>
				<ul class="nav nav-tabs project-tabs-container">
					<li class="active"><a data-toggle="tab" href="#paid">Client Projects</a></li>
					<li><a data-toggle="tab" href="#side">Side Projects</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Projects -->
	<div class="container-fluid projects-container">
		<div class="container">
			<div class="tab-content">
				<div id="paid" class="tab-pane fade in active">
					<!-- Applerose Solicitors -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/applerose_responsive.png" alt="Applerose Solicitors project details">
							<span class="live-view-btn"><a href="http://www.applerosesolicitors.com" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Applerose Solicitors (2016)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">The client requested a responsive website with the main purpose of providing an online presence for the business, allowing visitors to send a messsage using a contact form, and view location of the business via Google Maps.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Paid</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">2/3 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Responsive website design & development, Logo Design, Business Card Design and Letterhead Design.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, jQuery, Bootstrap 3, PHP</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Microsoft Visual Studio Code, Photoshop, Illustrator, Balsamiq (Wireframing)</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- Universal Lubricants -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/universal_responsive.png" alt="Universal Lubricants project details">
							<span class="live-view-btn"><a href="http://www.universallubricant.co.uk" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Universal Lubricants Ltd. (2017)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">The client requested a responsive website providing an online presence with business details, contact details, contact form and the products they sell. The visitors would be able to perform a search based on a catalogue of products, view a particular product in detail with each product having a set of individual specification and download a data sheet in .pdf format related to that product. Also, content management functionality for managing the products (adding, deleting and updating).</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Paid</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">3/4 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Responsive website design & development, MySQL database for the products, Logo Design.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, jQuery, Bootstrap 3, AJAX, PHP, MySQL, CodeIgniter 3</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text, Photoshop, Illustrator, Balsamiq(Wireframing)</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- SESEN Signs -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/sesensigns_responsive.png" alt="Sesen Signs project details">
							<span class="live-view-btn"><a href="http://www.sesensigns.co.uk" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>SESEN Signs (2016)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">Responsive website with a password protected admin page where an authorised user can upload images to the website. The uploaded images would be displayed in a gallery and also the last uploaded four images would be displayed on the homepage. The main purpose of the website is to provide an online presence for the business , allowing visitors to send a messsage using a contact form, view location of the business via Google Maps and to showcase the latest signage projects to potential customers.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Paid</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">2 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Responsive website design & development.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, jQuery, Bootstrap 3, PHP, MySQL, CodeIgniter 3</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text, Photoshop, Illustrator, Balsamiq(Wireframing)</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- USA Fried Chicken -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/usa_responsive.png" alt="USA Fried Chicken project details">
							<span class="live-view-btn"><a href="http://www.usatakeaway.co.uk" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>USA Fried Chicken & Kebab (2016)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">The client requested a simple, responsive website providing an online presence with business details, contact details and the main menu of their food business.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Paid</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">10 Days</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Responsive website design & development.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, jQuery, Bootstrap 3</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text, Photoshop, Illustrator, Balsamiq(Wireframing)</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- Signmax -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/signmax_responsive.png" alt="Signmax project details">
							<span class="live-view-btn"><a href="http://www.signmaxuk.com" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Signmax Ltd. (2014)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">I was recommended to this client whom wanted a similar website to my previous project. The client requested a responsive website with the main purpose of providing an online presence for the business, allowing visitors to send a messsage using a contact form, view location of the business via Google Maps and to showcase the latest signage projects to potential customers.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Paid</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">2/3 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Responsive website design & development.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, Jquery, Bootstrap 3, PHP, MySQL</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text, Photoshop, Illustrator, Balsamiq(Wireframing)</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Side Projects Container -->
				<div id="side" class="tab-pane fade">
					<!-- Portfolio -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/portfolio.png" alt="Portfolio project details">
							<span class="live-view-btn"><a href="http://www.msesen.com">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Portfolio (2017)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">A simple responsive portfolio website to provide details about my skills and projects.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Side Project</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">Ongoing</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Responsive website design & development</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, Jquery, Bootstrap 3, PHP</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text, Photoshop, Illustrator</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- Turbo Reminder -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/turbo_reminder.png" alt="Turbo Reminder project details">
							<span class="live-view-btn"><a href="https://play.google.com/store/apps/details?id=com.msesen.turboreminder" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Turbo Reminder (2014)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">A neat little reminder application for the Anroid Mobile Operating System. It was a personal project for diving into native anroid app development. The app supports full notification features, snoozing reminders, pop-up dilaogues, recurring reminders, password protection, backup & restore feature, and customising options.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Side Project</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">2/3 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Setting up a development environment, installing the Java SDK, following Google guidelines and best practices for the design & publication etc.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">Java, PHP, MySQL</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Eclipse & Android SDK</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- No More Smoking -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/no_more_smoking.png" alt="No More Smoking project details">
							<span class="live-view-btn"><a href="https://play.google.com/store/apps/details?id=com.mehmetsesen.nomoresmoking" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>No More Smoking (2016)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">Another project experimenting using various tools and technologies for developing mobile applications. I have used the web development technologies to develop an app to help smokers quit by giving them factual information such as number of minutes, days, weeks, years passed since they quit and the changes happening in their body as a result of quitting. To motivate the users and keep it interesting, achivements were used to keep the users from smoking again.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Side Project</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">1/2 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Getting familiar with Apache Cordova</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML 5, CSS 3, JavaScript, Jquery</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text, Apache Cordova, Photoshop, Illustrator</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- Mad Blocks -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/mad_blocks.png" alt="Mad Blocks project details">
							<span class="live-view-btn"><a href="https://play.google.com/store/apps/details?id=com.gmail.msesen.madblocks" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Mad Blocks (2013)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">This project was the result of me experimenting with the Corona SDK for producing a mobile application (video game).</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Side Project</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">1/2 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Getting familiar with the Corono SDK and Lua, the programming language of Corona SDK.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">Lua</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text, Corona SDK, Photoshop, Illustrator</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- Tech Exchange -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/tech_exchange.png" alt="Tech Exchange project details">
							<span class="live-view-btn"><a href="projects/mz_ex" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Tech Exchange (2013)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">This was a personal project for a friend who wanted a private website to be used daily in his business to track "BuyBacks". In a nutshell, his business model included buying second hand goods over the counter, offering buybacks for goods in which customers have the option of buying back with an agreed price and within a certain timeframe, applying interest on buybacks, extending buybacks, providing and tracking sales in which customers pay in installments, report management functionality, dodgy character feature for blacklisting customers, receipt generator etc.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Side Project</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">2/3 Weeks</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Private web app with a set of unique requirements and functionality.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, jQuery, PHP, MySQL</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- 4Mevsim -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/4_mevsim.png" alt="4 Mevsim project details">
							<span class="live-view-btn"><a href="projects/4Mevsim" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>4Mevsim (2013)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">A private web app requested by a friend to track their inventory, perform CRUD operations, search and make print lists.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Side Project</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">1 Week</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Private web app with a set of unique requirements and functionality.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, jQuery, PHP, MySQL</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<!-- Jewellery Sales -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
							<img class="img-responsive" src="images/screenshots/jewellery_sales.png" alt="Jewellery Sales Logging project details">
							<span class="live-view-btn"><a href="projects/sales" target="_blank">Live view</a></span>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="project-info-container">
								<div class="project-title-container">
									<h4>Jewellery Sales Loggin (2013)</h4>
								</div>
								<div class="info-row">
									<div class="info-label">Description</div>
									<div class="info-text">Purely a fun, experimental little project, in which allows the user to record daily jewellery sales with information regarding item's carat, weight, size etc. and then automaticaly calculate the profit margins, cost price, total sales, current sales, search functionality for viewing sales on a specific date, sending an e-mail once a sale is entered etc.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Type:</div>
									<div class="text-hor">Side Project</div>
									<div class="label-hor">Duration:</div>
									<div class="text-hor">1 Week</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Project Tasks</div>
									<br>
									<div class="text-hor">Private web app with a set of unique requirements and functionality.</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Technologies</div>
									<br>
									<div class="text-hor">HTML5, CSS3, JavaScript, jQuery, PHP, MySQL</div>
								</div>
								<div class="info-row">
									<div class="label-hor">Tools</div>
									<br>
									<div class="text-hor">Sublime Text</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .end container -->
	</div><!-- .end container-fluid -->

	<!--Get Footer-->
	<?php include_once "templates/footer.php"; ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Bootstrap - Needs jQuery -->
	<script src="js/bootstrap.js"></script>

	<!-- Waypoints jQuery plugin -->
	<script src="js/waypoints.min.js"></script>

	<!--Main Javascript file -->
	<script src="js/main.js"></script>

</body>

</html>