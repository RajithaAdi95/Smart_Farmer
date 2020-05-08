
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
		<title>Agriculture</title>
		<link rel="icon" href="img/index.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial -scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
		<div class="banner"> 
		<header>
			<div class="SiteName">
				<h1><b>Smart Farmer</b></h1>
				<a href="index.html">Logout</a>
			</div>
			
			<div class="search_my">
			<!--	<form>
					<input type="search" class="search1" placeholder="search">
					<button class="button1" type="submit"><i class="fa fa-search"></i></button>-
				</form>-->
			</div>
		<!--	<div>
				<a href="https://www.google.com">Login</a>
			</div>	-->
		</header>

		
		<div class="icons">
			<a href="https://www.facebook.com/" class="facebook">Facebook<i class="fa fa-facebook-f"></i></a>
			<a href="https://twitter.com/login" class="twitter">Twitter<i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com" class="instagram">Instagram<i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/" class="youtube">Youtube<i class="fa fa-youtube"></i></a>
		</div>
		
		<div class="menu-bar">
			<div class="language">
				<h5><a href="AdminWeatherSinhala.php" style="color: white;">සිංහල</a>	<a href="adminWeatherTamil.php" style="color: white;">தமிழ்</a></h5>
			</div>
			<ul>
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="aboutUs.html"><i class="fa fa-user"></i>About Us</a></li>
				<li><a href="news.html"><i class="fa fa-comment-lines"></i>News</a></li>
				<li><a href="contact.html"><i class="fa fa-phone"></i>Contact</a></li>
				<li class="active"><a href="#"><i class="fa fa-cloud-sun-rain"></i>Agriculture</a></li>
			</ul>
		</div>
		</div>
<br><br><br>

            <form method="post">

		
			<div class="input-group" >
			
		<center>	
			<label>Fertilizer(Can select multiple nutirent)</label>
			
			
			<select type="text" style="color:blue;width:26%;height:40px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" name="fertilizerName" id="fertilizerName" required=""> 
            <option value="Nutrient">Add Nutrient...
			</option>			
			<option value="Sottasium dyocside(k20)">Pottasium dyocside(k20)</option>
			<option value="Pottasium(K)">Pottasium(K)</option>
			<option value="Pottasium(K)">Nitregen</option>
			</select>
			
			<select type="text" style="color:blue;width:25%;height:40px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" name="fertilizerUnit" id="fertilizerUnit"> 
			<option value="Unite">Unite</option>			
			<option value="Grams(g)">Grams(g)</option>
			<option value="MiliGrams(mg)">MiliGrams(mg)</option>
			<option value="g 100g-1">g 100g-1</option>
	        </select>
			
			<select  type="text" style="color:blue;width:25%;height:40px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" name="fertilizerValue" id="fertilizerValue"> 
			<option value="Value">Value</option>			
			<option value="13.7">13.7</option>
			<option value="15.6">15.6</option>
			<option value="24.8">24.8</option>
			<option value="24.8">21.8</option>
			<option value="24.8">4.9</option>
			<option value="24.8">4.1</option>
	        </select>
		</center>
			
			
		   
		 </div>

		 <button  type="submit" name="add_fertilizer" style="color:white;width:20%;height:40px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px; background-color: #28a745;"  >Add</button>
		</form>

		<br><br><br>

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
					<h3><a href="index.html">Smart Farming</a></h3>
					<h6>Copyright <i class="fa fa-copyright"></i> 2019. All Rights reserved.</h6>
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