<!-- for the form data to email -->

<?php

if($_POST["submit"]) {
    $recipient="matt.kfpc@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
		$phonenumber=$_POST["phonenumber"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nPhone number: $phonenumber\n\n$message ";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<!--Note: that xmlns provides a method to avoid element name conflicts.-->
<head>
	<title>Matt Paek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
	<!--A <meta>viewport element gives the browser instructions on how to control the page's dimensions and scaling.-->
	<meta charset="utf-8"/>
	<!--Writing down utf-8 refers to the type of encoding (Storage in the comp)-->
		<link rel="shortcut icon" href="image/micon2.png" type="image/x-icon"/>
		<!--the link rel below gives me the little icon on the top of the browser-->
	<meta name="robots" content="index, follow"/>
	<!-- robots are used for search engines. Google and ect. will search through all my webpages if i put this in.-->
  	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  	<meta http-equiv="content-language" content="en" />
	<!-- I actually have no iea why i'm using http-equiv. It seems pointless to add content language and content type
	because I already specified my character set earlier and default should be English?-->
  	<meta name="keywords" content="Matthew Paek, Matthew, Paek, resume, portfolio"/>
  	<meta name="description" content="Matthew's portfolio"/>
  	<meta name="author" content="Matthew Paek"/>

		<!--Bootstrap-->
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>

		<!--Links to Jquery scripts, from w3schools, these are default boostrap files-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/homepage.js"></script>

			<!--CSS-->
		<link type="text/css" rel="stylesheet" href="css/homepage.css"/>
  	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

		<!--Font icons-->
		<script src="https://use.fontawesome.com/a34e19ae1a.js"></script>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">


</head>
<body>

	<header id="banner" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="#top" class="scrollable"><img src="https://s-media-cache-ak0.pinimg.com/236x/17/3e/4a/173e4ac918977f8f603a714349d85128.jpg" height="50px" width="75px" alt= "M logo | Web Development" title="M Web Development"/></a>
			<button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" class="navbar-toggle collapsed">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<nav id="navbar" role="navigation" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#top" class="scrollable">Intro</a></li>
					<li><a href="#portfolio" class="scrollable">Portfolio</a></li>
					<li><a href="#contact" class="scrollable">Contact</a></li>
                                        <li><a href="/about.html" id="aboutbutton" class="scrollable">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<a id="top" name="home"></a>
<!-- This gives some padding-->

	<main>

<!--Header section-->

		<header>
			<div class="intro-text">
				<h1>Matthew Paek</h1>
				<p>I'm a web developer in training. I'm learning by <strong>doing</strong> projects and currently using <a href="http://www.freecodecamp.com">a free coding online resource</a> to help me.</p>
				<hr class="star-bright"/>
			</div><img src="http://i.imgur.com/St8t0GN.jpg?1" alt="profile pic"/>
		</header>

<!--Gallery grid section-->

		<section id="portfolio">
			<h2>Portfolio</h2>
			<hr class="star-dark"/>
			<ul class="grid">
				<li><a href="/Website1" target="_blank"><img src="http://i.imgur.com/ShG8vFM.png" alt="First Website Portfolio"/></a><p>My First Website</p></li>

			</ul>
		</section>


<!-- Contact Section -->
		<section id="contact">
	  	<h2>Contact me</h2>
			<hr class="star-dark"/>
			<div>
				<form id="contactForm" novalidate="" method="post" action="index.php">
					<div class="form-item">
						<label for="name">Name</label>
						<input id="name" name="sender" type="text" placeholder="Name" required=""/>
					</div>
					<div class="form-item">
	          <label for="“email”">Email Address</label>
	          <input id="email" name="senderEmail" type="email" placeholder="Email Address" required=""/>
	        </div>
	        <div class="form-item">
	          <label for="“phone”">Phone Number</label>
	          <input id="phone" name="phonenumber" type="tel" placeholder="Phone Number" required=""/>
	        </div>
	        <div class="form-item">
	          <label for="“message”">Message</label>
	          <textarea id="message" name="message" rows="5" placeholder="Message" required=""></textarea>
	        </div>
		<input type="submit" name="submit">
        </form>
				<div>
					<p>Want to get in touch? Send me an email!</p>
				</div>
			</div>
		</section>
		<!-- Scroll to Top Button (Only supposed to be visible on small and small screen sizes)-->
		<div class="scroll-top"><a href="#top" class="button scrollable"><i class="fa fa-chevro-up"></i></a></div>
	</main>
	<!--Footer-->
	<footer>
	  <div id="footer-above">
	    <div>
	      <h3>About this page</h3>
	      <p>Made by Matthew Paek using HTML, CSS, Javascript, and a little bit of magic.</p>
	    </div>
	    <div>
	      <h3>Around the Web</h3>
	      <ul>
	        <li><a href="https://www.linkedin.com/in/matthew-paek-16276050 "class="button social"><i class="fa fa-fw fa-linkedin"></i></a></li>
	        <li><a href="https://github.com/mattkfpc "class="button social"><i class="fa fa-fw fa-github"></i></a></li>
	        <li><a href="https://www.facebook.com/profile.php?id=711590318 "class="button social"><i class="fa fa-fw fa-facebook"></i></a></li>
	      </ul>
	    </div>
	  </div>
	  <div id="footer-below">Copyright 2015 -
	    <script>document.write(new Date().getFullYear())</script>
	  </div>
	</footer>


</body>
</html>
