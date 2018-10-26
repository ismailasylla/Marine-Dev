
<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<link rel="shortcut icon" href="../images/contact.png" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Wedding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/bootstrap.js"></script>
</head>
<body>
<!--header-->
	<!-- <div class="header head-top"> -->
		<!-- <div class="container"> -->
			<!-- <div class="header-top"> -->
				<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <div class="navbar-brand">
      <h1 style="margin-top: 5px;" > <a href="contact.php">Contact</a></h1>
	  </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About me</a></li>
        
		
		<li class="active"><a href="contact.php">Contact</a></li>
      </ul>
      
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
			<!-- </div> -->
			
			<!-- </div> -->
	</div>
	<!--header-->
	 <div class="content">
 		<div class="contact">
 			<div class="container">
 				<h2>Contact Me </h2>
 				<?php if(isset($_GET['sent'])) if($_GET['sent']== 'true' ) echo '<div class="alert alert-success auto-close" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>Your message has been sent successfuly.<br> Thank You</div>';

					if(isset($_GET['invalid'])) if($_GET['invalid']== 'email' ) echo '<div class="alert alert-danger auto-close" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>Please enter a valid Email address! .<br> Thank You</div>';

 				?>
		 			<div class="contact-map">
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420" width="100%" height="151px" frameborder="0" style="border:0"></iframe> -->

						
						<img src="images/me.jpg"   width=320px height=320px  style="border-radius:100%; margin-left: 400px;margin-right: auto; margin-left: auto; " >

						<img src="" style="position: absolute; height: 50px;">
						<img src="" style="position: absolute; height: 100px; >
					
 

				<div class="contact_top" >
			 		<div class="col-md-8 ">
			 			<h2 style="color: black ; margin-right: 400px">Contact Form</h2>
			 			<!-- <p>Here you Can Contact me.</p> -->
					  <form action="save_message.php" method="post" id="frm">
						 <div class="form_details">
					          <input type="text"  required name="contactName"  class="text" placeholder="Name">
							  <input type="text"  required name="contactEmail" class="text" placeholder="Email Address" id="email">
							  <input type="text"  required name="contactSubject" class="text" placeholder="Subject" >
							  <textarea required name="contactMessage" placeholder="Message"></textarea>
							  <div class="clearfix"> </div>
							 	 <div class="sub-button">
							  		<input type="submit" value="Send message">
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
				<!-- <div class="clearfix"> </div> -->
			</div>
		</div>
	</div>
 </div>
 </div>
  
   
   </div>
   </div>
</div>

 <script>

 	$(document).ready(function(){
 		setTimeout(function(){
 			$(".auto-close").hide(2000);
 		},2000);
 	});
 	$("form").submit(function(e) {

    var ref = $(this).find("[required]");

    $(ref).each(function(){
        if ( $(this).val() == '' )
        {
            alert("Required field should not be blank.");

            $(this).focus();

            e.preventDefault();
            return false;
        }
    });  return true;
});
 </script>


 <script type="text/javascript">
 	
 	function validate(e) {
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;

    var emailFilter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
    var phoneFilter = /^http:\/\//;

    if (!emailFilter.test(email)) {
        alert('Please enter a valid e-mail address.');
        return false;
    }

    if (!phoneFilter.test(phone)) {
        alert('Please correct your phone number.');
        return false;
    }

    alert('all good')
    return true;
}

document.getElementById('frm').onsubmit = validate;
 </script>
	<!--footer-->
		<?php include 'footer.php';?>
	
</body>
</html>