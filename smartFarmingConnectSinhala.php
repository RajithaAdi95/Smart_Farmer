<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Smart Farming</title>
		<link rel="icon" href="img/index.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial -scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			#map-canvas{
				width: 400px;
				height: 400px;
			}
		</style>
	</head>

	<body>
		
		

		<div class="banner"> 
		<header>
			<div class="SiteName">
				<h1><b>Smart Farmer</b></h1>
				<a href="indexSinhala.html">Logout</a></h5>
			</div>
			
			<div class="search_my">
				<form>
					<input type="search" class="search1" placeholder="search">
					<button class="button1" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</header>

		
		<div class="icons">
			<a href="https://www.facebook.com/" class="facebook">ෆේස්බුක්<i class="fa fa-facebook-f"></i></a>
			<a href="https://twitter.com/login" class="twitter">ට්විටර්<i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com" class="instagram">ඉන්ස්ටග්රෑම්<i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/" class="youtube">යූ ටියුබ්<i class="fa fa-youtube"></i></a>
		</div>
		
		<div class="menu-bar">
			<div class="language">
				<h5><a href="smartFarmingConnect.php" style="color: white;">English</a>	<a href="smartFarmingConnectTamil.php" style="color: white;">தமிழ்</a></h5>
			</div>
			<ul>
				<li><a href="indexSinhala.html"><i class="fa fa-home"></i>ප්රධාන මෙනුව</a></li>
				<li><a href="aboutUsSinhala.html"><i class="fa fa-user"></i>පුවත්</a></li>
				<li class="active"><a href="#">ස්මාර්ට් ෆාර්මින්</a></li>
				<li><a href="newsSinhala.html"><i class="fa fa-comment-lines"></i>අමතන්න</a></li>
				<li><a href="contactSinhala.html"><i class="fa fa-phone"></i>ලොග් වීම</a></li>
			</ul>
		</div>
		</div>
		<br>


			<center>
			<br>
			<div>
				<form action="smartFarmingConnectSinhala.php" method="POST">
					ප්‍රදේශය : <input type="text" name="area" placeholder="">
				<!--	Month : <input type="text" name="month" placeholder="">-->
					බෝග : <input type="text" name="crop" placeholder="">
					<br></b><br><button type="submit" name="search">සෙවීම</button>
				</form>

				<table border="4" width="90%" cellpadding="8" cellspacing="20">
					<tr>
						<th>බෝග හැඳුනුම්පත</th>
						<th>බෝගයේ නම</th>
						<th>දිස්ත්‍රික් නාමය</th>
						<th>උෂ්ණත්වය</th>
						<th>ජල මට්ටම</th>
						<th>පාංශු</th>
						<th>පොහොර</th>
						<th>කාල සීමාව</th>
					</tr>
				

				<?php
					$conn=mysqli_connect("localhost","root","","smartfarmer");
					$area=$_POST['area'];
					/*$month=$_POST['month'];*/
					$crop=$_POST['crop'];
					if($area || $crop){
					/*	$show="SELECT * FROM crop where area='$area' OR crop='$crop'";  */
						$show="SELECT c.cropID,c.cropName,c.temperature,c.waterlevel,c.soil,c.fertilizer,c.timeperiod,d.districtName FROM crop as c,district as d where c.cropID=d.cropID AND (districtName='$area' OR cropName='$crop')";
						$result=mysqli_query($conn,$show);
						while ($rows=mysqli_fetch_array($result)) {
							echo "<tr>";
							echo "<td>";
							echo $rows['cropID'];
							echo "</td>";
							echo "<td>";
							echo $rows['cropName'];
							echo "</td>";
							echo "<td>";
							echo $rows['districtName'];
							echo "</td>";
							echo "<td>";
							echo $rows['temperature'];
							echo "</td>";
							echo "<td>";
							echo $rows['waterlevel'];
							echo "</td>";
							echo "<td>";
							echo $rows['soil'];
							echo "</td>";
							echo "<td>";
							echo $rows['fertilizer'];
							echo "</td>";
							echo "<td>";
							echo $rows['timeperiod'];
							echo "</td>";
							echo "</tr>";
							echo "<br/>";
						}
					}
					else{
							echo "No Crop Available for your Searching.......";
					}
				?>
				</table>
			</div>
			</center>
			
			<br>
			<center>
		<div>
			<br>
			<p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15773.655531229731!2d80.3992645!3d8.7470711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1579968342883!5m2!1sen!2slk" width="75%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</p>
		</div>
		</center>

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
					<h3><a href="indexSinhala.html">Smart Farming</a></h3>
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

	</body>
</html>