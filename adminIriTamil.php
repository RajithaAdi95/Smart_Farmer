<?php
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="icon" href="img/index.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial -scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		
	

		<div class="banner"> 
		<header>
			<div class="SiteName">
				<h1><b>Smart Farmer</b></h1>
				<a href="indexTamil.html">Logout</a>
			</div>
			
			<div class="search_my">
				<form>
					<input type="search" class="search1" placeholder="search">
					<button class="button1" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		<!--	<div>
				<a href="https://www.google.com">Login</a>
			</div>	-->
		</header>

		
		<div class="icons">
			<a href="https://www.facebook.com/" class="facebook">பேஸ்புக்<i class="fa fa-facebook-f"></i></a>
			<a href="https://twitter.com/login" class="twitter">ட்விட்டர்<i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com" class="instagram">இன்ஸ்டா<i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/" class="youtube">யூடியூப் <i class="fa fa-youtube"></i></a>
		</div>
		
		<div class="menu-bar">
			<div class="language">
				<h5><a href="AdminIrigation.php" style="color: white;">English</a>	<a href="adminIriSinhala.php" style="color: white;">සිංහල</a></h5>
			</div>
			<ul>
				<li><a href="indexTamil.html"><i class="fa fa-home"></i>முகப்பக்கம்</a></li>
				<li><a href="aboutUsTamil.html"><i class="fa fa-user"></i>விபரம்</a></li>
				<li><a href="newsTamil.html"><i class="fa fa-comment-lines"></i>செய்தி</a></li>
				<li><a href="contactTamil.html"><i class="fa fa-phone"></i>தொடர்பு</a></li>
				<li class="active"><a href="#"><i class="fa fa-cloud-sun-rain"></i>Irigation</a></li>
			</ul>
		</div>
		</div>

		

		<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 three_clo">
					<h4>News Later</h4>
					<p>Send us News</p>
					<form>
						<input type="email" placeholder="">
						<button class="btn1">
							<i class="fa fa-envelope-open"></i>
						</button>
					</form>
				</div>

				<div class="col-md-4 mid-row">
					<h4>Follow Us</h4>
					<h3><a href="indexTamil.html">Smart Farming</a></h3>
					<h6>Copyright <i class="fa fa-copyright"></i> 2019. All Rights reserved.</h6>
					<!--<p>Facebbo Twitter Youtube</p>
					<div class="social-icon">
						<a href="#"><i class="fa fa-facebook-f"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div> -->
				</div>

				<div class="col-md-4 contact">
					<h4>Contact Us</h4>
					<p><i class="fas fa-map-marker-alt"></i>VCUOJ vavuniya <span class="number">80200</span></p>
					<p><i class="fa fa-phone"></i>Call Us : <span class="number">0775158202</span></p>
					<p><i class="fa fa-envelope-open"></i>Email Us : <span class="number"><a href="smartfarm@gmail.com" class="info">smartfarmer2k20@gmail.com</a></span></p>
				</div>
			</div>
		</div>
	</footer>

	<a href="#" id="back-to-top" title="Back to top"></a>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<script type="text/javascript">
		$(window).load(function(){
			if($('#back-to-top').length){
			var scrollTrigger = 100,
			backToTop = function(){
				var scrollTop = $(window).scrollTop();
				if(scrollTop > scrollTrigger){
					$('#back-to-top').addClass('show');
				}
				else{
					$('#back-to-top').removeClass('show');	
				}
			};
			backToTop();
			$(window).on('scroll',function(){
				backToTop();
			});
			$('#back-to-top').on('click',function(e){
				e.preventDefault();
				$('html,body').animate({
					scrollTop:0
				},700);
			});
		}
		});
	</script>

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery.flexsider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
		});
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation:"slide",
				start:function(slider){
					$('body').removeClass('loading');
				}
			});
		});
	</script>	

	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.6.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.6.2/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

	</body>
</html>