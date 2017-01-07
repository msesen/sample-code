// JavaScript Document

$(document).ready(function(){
	
	// Add the .active-link class to the current page's link by using the last part of the url
	var url = window.location.href;
	
	url = url.substring(url.lastIndexOf('/') + 1);
	
	if( url === "index.php" || url === "") {
		$('.nav-home').addClass('active-link');
	}
	else if( url == "projects.php") {
		$('.nav-projects').addClass('active-link');
	}
	else if( url == "resume.php") {
		$('.nav-resume').addClass('active-link');
	}
	else { //Contact
		$('.nav-contact').addClass('active-link');
	}
	
	// Send CV button click handler
	$(".send-cv-container button").click(function(event) {

		event.preventDefault();

		var email = $("input#cv-email").val();
	
		if(validateEmailInput(email)) {
			
			// Display the loading animation
			$(".img-loading").css("display","block");

			$.ajax(
			{
				url: "../php/send-cv.php",
				type: "POST",
				dataType: 'json',
				data: 
					{
						email: email
					},
				success: function(response, status, xhr)
				{
					// No validation errors - email sent successfully
					if(response.email_sent === true) {
						// Clear input
						$("input#cv-email").val("");
						
						// Success -  Show notification bar
						notification("E-mail sent. Thank you.", "success");
					}
					else {
						
						// Error - Show notification bar
						notification("Opps, there was an error. Please try again.", "warning");
					}

					// Hide the loading animation
					$(".img-loading").css("display","none");
				},
				error: function(xhr, status, error)
				{
					// Hide the loading animation
					$(".img-loading").css("display","none");
					
					// Show notification bar
					notification("Opps, there was an error. Please check connection and try again.", "warning");
				}
			});
		}
	});

	// Contact form click handler
	$('#contactform-btn').click(function(event){

		event.preventDefault();

		var name = $("input#name").val();
		var email = $("input#email").val();
		var subject = $("input#subject").val();
		var message = $("textarea#message").val();

		if(name == '' || message == '') {
			// Show required Msg
			notification("Name, E-Mail and Message content is required", "warning");
		}
		else if(validateEmailInput(email)) {

			// Display the loading animation
			$(".img-loading").css("display","block");

			// Make an ajax call to the contactform controller
			$.ajax(
			{
				url: "../php/send-contactform.php",
				type: "POST",
				dataType: 'json',
				data: 
					{
						name: name, email: email, subject: subject, message: message
					},
				success: function(response, status, xhr)
				{
					// No validation errors - email sent successfuly
					if(response.email_sent === true) {
						// Clear form inputs
						$("input#name").val("");
						$("input#email").val("");
						$("input#subject").val("");
						$("textarea#message").val("");
						
						// Success - Show notification bar
						notification("Message sent. Thank you.", "success");
					}
					else {
						// Error - Show notification bar
						notification("Opps, there was an error. Please try again.", "warning");
					}

					// Hide the loading animation
					$(".img-loading").css("display","none");
				},
				error: function(xhr, status, error)
				{
					// Hide the loading animation
					$(".img-loading").css("display","none");

					// Show notification bar
					notification("Opps, there was an error. Please check connection and try again.", "warning");	
				}
			});
		}
	});

	
	// Page specific code - Homepage
	if($("body").hasClass("page-index")) {
		
		/*
		 * Analogue Clock
		 */
		// Get clock elements
		var seconds_hand = document.getElementById("seconds-hand");
		var minutes_hand = document.getElementById("minutes-hand");
		var hours_hand = document.getElementById("hours-hand");
	
		// Animate clock every second
		setInterval(function() {

			// Get current datetime
			var curr_date = new Date();
			var curr_second = curr_date.getSeconds();
			var curr_minute = curr_date.getMinutes();
			var curr_hour = curr_date.getHours();
		
			// Calculate rotation angle based on current time
			// * 6 to get the full 360 deg for seconds and minutes
			var degSec = curr_second * 6;
			var degMin = curr_minute * 6;
		
			// 15 degrees = 1 hour. We need to calculate 15 * 2 for 24hour format. To set the "hours hand" correctly we also need to get the current angle of the "minutes hand" and divide it by 12 to set the angle of the "hours hand" correctly
			// (Minute degrees / 12) represents the full 360 degree in 30 degrees (within one hour angle). We can add the (current hours degrees) + (current minute degrees / 12) to get the correct "hours hand" angle.
			var degHr = (curr_hour * 30)+(degMin / 12); 
		
			//Rotate hands
			seconds_hand.style.transform = "rotate("+degSec+"deg)";
			minutes_hand.style.transform = "rotate("+degMin+"deg)";
			hours_hand.style.transform = "rotate("+(degHr)+"deg)";
		},1000);
		
		
		// On monitor typing
		// Dom Elements to target for writing the texts
		var elems = ["open-tag", "tag-text", "close-tag", "open-brace", "brace-text", "close-brace", "open-echo", "echo-text", "close-echo", "open-comment", "comment-text", "close-comment"];
	
		// Text to output in the same order as the elements array
		var text = ["<h1>", "Hello World", "</h1>", "alert( ", "\"I'm Mehmet Sesen, a Web Developer based in London, UK.\"", " );", "echo ", "\"Skills include HTML 5, CSS 3, JavaScript, jQuery, PHP, MySQL, Bootstrap, CodeIgniter, OOP, Design Conversion, Photoshop, Illustrator.\"", ";", "/*", " Please, do look around for further info. ", "*/"];
		
		// Starting text
		var string = text[0];
		
		// Counter for incrementing for the next char in string
		var string_count = 0;
	
		// Counter for incrementing for the next element
		var elem_count = 0;
	
		// DOM element to target for each text
		var ele = document.getElementById(elems[elem_count]);
	
		// Start timer
		setTimeout(startTyping, 1000);
		function startTyping() {
	
			// Output the next char in the string if we are not past the final char
			if(string_count <= string.length ) {
				
				// Remove the caret before appending the next set of chars
				$(".text-caret").remove();
	
				// Get the current text of the element
				var elem_text = $("#"+elems[elem_count]).html();
	
				// Append the next char to the current text of the element, and append the caret to the end
				$("#"+elems[elem_count]).html(elem_text+string.charAt(string_count)+"<span class='text-caret'>|</span>");
				
				// Increment string counter
				string_count++;
			}
			else {
				// Remove the caret before appending next chars from next set of words
				$(".text-caret").remove();
	
				// Get next DOM element and string
				elem_count++;
				ele = document.getElementById(elems[elem_count]);

				// Reset for next elemnt and text
				string_count = 0;
				string = text[elem_count];
			}
	
			// Set timer only if there are still elements in the array
			if (elem_count < elems.length) {
	
				//Generate a random number each time for a more natural typing effect
				var random = Math.floor((Math.random() * 250) + 50);
				setTimeout(startTyping, random);
			}
			else {
				// Keep caret at the end and blink it
				$("#"+elems[elem_count-1]).html($("#"+elems[elem_count-1]).html()+"<span class='text-caret'>|</span>");
				setInterval(function() {
					$(".text-caret").toggle();
				}, 500);
			}
		}
	
	
		// Skills Section Bar charts
		// Flag for checking if barchart animation is running
		var isAnimRunning = false;
		
		// jQuery plugin for detecting if an element is in viewport
		var waypoint = new Waypoint({
			element: document.getElementById('skills-section'),
			handler: function(direction) {
				
				//If barcharts is not running, restart the timer
				if (!isAnimRunning) {
					
					// To prevent animations overlapping and canncelling on scroll
					isAnimRunning = true;
					
					// Overwrite each barchart's (element's) animation name
					document.getElementById("bar-html").style.WebkitAnimationName = "none";
					document.getElementById("bar-css").style.WebkitAnimationName = "none";
					document.getElementById("bar-javascript").style.WebkitAnimationName = "none";
					document.getElementById("bar-php").style.WebkitAnimationName = "none";
					document.getElementById("bar-mysql").style.WebkitAnimationName = "none";
					document.getElementById("bar-java").style.WebkitAnimationName = "none";
					document.getElementById("bar-android").style.WebkitAnimationName = "none";
					document.getElementById("bar-oop").style.WebkitAnimationName = "none";
					document.getElementById("bar-jquery").style.WebkitAnimationName = "none";
					document.getElementById("bar-bootstrap").style.WebkitAnimationName = "none";
					document.getElementById("bar-codeigniter").style.WebkitAnimationName = "none";
					document.getElementById("bar-apache").style.WebkitAnimationName = "none";
					document.getElementById("bar-git").style.WebkitAnimationName = "none";
					document.getElementById("bar-gulp").style.WebkitAnimationName = "none";
					document.getElementById("bar-photoshop").style.WebkitAnimationName = "none";
					document.getElementById("bar-illustrator").style.WebkitAnimationName = "none";
					document.getElementById("bar-designto-html5").style.WebkitAnimationName = "none";
					
					setTimeout(function ()
					{
						// Set each barchart's (element's) animation name property to start the animation again
						document.getElementById("bar-html").style.WebkitAnimationName = "width90";
						document.getElementById("bar-css").style.WebkitAnimationName = "width80";
						document.getElementById("bar-javascript").style.WebkitAnimationName = "width80";
						document.getElementById("bar-php").style.WebkitAnimationName = "width80";
						document.getElementById("bar-mysql").style.WebkitAnimationName = "width70";
						document.getElementById("bar-java").style.WebkitAnimationName = "width70";
						document.getElementById("bar-android").style.WebkitAnimationName = "width70";
						document.getElementById("bar-oop").style.WebkitAnimationName = "width80";
						document.getElementById("bar-jquery").style.WebkitAnimationName = "width80";
						document.getElementById("bar-bootstrap").style.WebkitAnimationName = "width80";
						document.getElementById("bar-codeigniter").style.WebkitAnimationName = "width80";
						document.getElementById("bar-apache").style.WebkitAnimationName = "width70";
						document.getElementById("bar-git").style.WebkitAnimationName = "width80";
						document.getElementById("bar-gulp").style.WebkitAnimationName = "width80";
						document.getElementById("bar-photoshop").style.WebkitAnimationName = "width70";
						document.getElementById("bar-illustrator").style.WebkitAnimationName = "width70";
						document.getElementById("bar-designto-html5").style.WebkitAnimationName = "width90";
					}, 5);
					
					// Setflag to false after 4 seconds (4 second sis set in css animation duration) so animations can start again
					setTimeout(function ()
					{					
						isAnimRunning = false;
					}, 4000);
				}
			},
			offset: 200
		});
	}
	
	// Validate the entered email value
	function validateEmailInput(email) {
		var atpos = email.indexOf("@");
		var dotpos = email.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
			
			// Show notification bar
			notification("Please enter a valid e-mail adress", "warning");
			return false;
		}
		else {
			return true;
		}
	}
	
	// Display a notification at the top of the screen based on notification type (success || warning)
	function notification(msg, type) {

		// Set styling
		if(type == "success") {
			$(".notification-bar").css("backgroundColor","#71CC64");
			$(".notification-bar").css("color","#FFFFFF");
		}

		if(type == "warning") {
			$(".notification-bar").css("backgroundColor","#F97E7E");
			$(".notification-bar").css("color","#FFFFFF");
		}	

		// Show notification
		$(".notification-bar").html(msg).toggle("fast").delay(3500).toggle("fast");
	}
	
	// Scroll to anchor points
	$('a[href^="#"]').on('click', function(event) {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top-30
			}, 1000);
		}
	});
	
	
	/* 
		Set the date in footer to current year
	*/
	
	// Get element
	var footerDate = document.getElementById("footer-year");
	
	// Get current datetime
	var currYear = new Date();
	var currYear = currYear.getFullYear();
	
	// Set the element's text
	footerDate.innerHTML = currYear;
	
});//.end JQuery Document Ready Function
