<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>Portfolio| Developper</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<!-- <link href="css/bootstrap-theme.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/swiper.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Header_section-->
	<header id="header_wrapper" style="padding: 0px;" class="top_left_cont zoomIn wow animated">
		<div class="container">
			<div class="header_box">
				<div class="logo"><a href="index.php"><img src="img/logo2.png" alt="logo" style="width:200px"></a></div>
				<nav class="navbar navbar-inverse" role="navigation">
					<div class="navbar-header">
						<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
							<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
							<span class="icon-bar"></span> </button>
					</div>
					<div id="main-nav" class="collapse navbar-collapse navStyle">
						<ul class="nav navbar-nav" id="mainNav">
							<li ><a href="index.php">Home</a></li>
							<li><a href="#Portfolio" class="scroll-link">Map</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!--Header_section-->
	<!--header-->
	<div class="content">
		<div class="contact" style="padding: 30px; background-color: #ffffff;">
			<div class="container">
				<h2>Contact Me </h2>


				<?php include 'validate.php';?>

				<div class="contact-map isotope fadeInLeft animated wow grid">

					<img src="img/me.jpg" width=320px height=320px style="border-radius:100%; margin-left: 400px;margin-right: auto; margin-left: auto; ">

					<img src="" style="position: absolute; height: 50px;">
					<img src="" style="position: absolute; height: 100px; >



				<div class="contact_top">
					<div class="col-md-8 ">
						<h2 style="color: black ; margin-right: 400px">Contact Form</h2>
						<!-- <p>Here you Can Contact me.</p> -->
						<form action="save_message.php" method="post" id="frm">
							<div class="form_details">
								<input type="text" name="contactName" class="text" placeholder="Name" required>
								<input type="text" name="contactEmail" class="text" placeholder="Email Address" id="email" required>
								<input type="text" required name="contactSubject" class="text" placeholder="Subject">
								<textarea name="contactMessage" placeholder="Message" required></textarea>
								<div class="clearfix"> </div>
								<div class="sub-button">
									<input id="button" type="submit" value="Send">
								</div>
							</div>
						</form>
					</div>

					<div class="col-md-4 ">
						<div class="company_ad">
							<h3 style="color: black">Contact Info</h3>

							<address>
								<p>Email : syldox@gmail.com</a></p>
								<p>Phone : +91 9008795117</p>
								<p>India,Karnataka,Bangalore.</p>

							</address>
						</div>
					</div>
					<section id="Portfolio" class="content">
						<div class="content" id="Portfolio">
							<iframe src="https://www.google.com/maps/embed?	pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.	1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420"
							width="100%" height="151px" frameborder="0" style="border:0"></iframe>
						</div>
					</section>

					<!-- <div class="clearfix"> </div> -->
				</div>
			</div>
		</div>
	</div>
	</div>


	</div>
	</div>
	</div>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/contact_form.js"></script>
  <script src="js/swiper.jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.nav.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>

</body>

</html>