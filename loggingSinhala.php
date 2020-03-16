<?php
	session_start();

	$conn = new mysqli("localhost","root","","testPHP");

	$msg="";	

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = sha1($password);
		$usertype = $_POST['usertype'];

		$sql = "SELECT * FROM logs WHERE Username=? AND Password=? AND UserType=?";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param("sss",$username,$password,$usertype);
		$stmt->execute();
		$result=$stmt->get_result();
		$row = $result->fetch_assoc();

		session_regenerate_id();
		$_SESSION['username'] = $row['username'];
		$_SESSION['role'] = $row['UserType'];
		session_write_close();

		if ($result->num_rows==1 && $_SESSION['role']=='Admin') {
			if ($username=='AdminWeather') {
				header("location:AdminWeatherSinhala.php");
			}
			else{
				header("location:AdminIriSinhala.php");
			}
		}
		else if ($result->num_rows==1 && $_SESSION['role']=='User') {
			header("location:smartFarmingSin.php");
		}
		else{
			$msg = "පරිශීලක නාමය හෝ මුරපදය වැරදිය...";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Logging</title>
		<link rel="icon" href="img/index.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial -scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!--<link rel="stylesheet" type="text/css" href="logReg.php">-->
	</head>

	<body>
		<div class="banner"> 
		<header>
			<div class="SiteName">
				<h1><b>Smart Farmer</b></h1>
				<h5><a href="logging.php">English</a>	<a href="loggingTamil.php">தமிழ்</a></h5>
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
			<a href="https://www.facebook.com/" class="facebook">ෆේස්බුක්<i class="fa fa-facebook-f"></i></a>
			<a href="https://twitter.com/login" class="twitter">ට්විටර්<i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com" class="instagram">ඉන්ස්ටග්රෑම්<i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/" class="youtube">යූ ටියුබ්<i class="fa fa-youtube"></i></a>
		</div>
		
		<div class="menu-bar">
			<ul>
				<li><a href="indexSinhala.html"><i class="fa fa-home"></i>ප්රධාන මෙනුව</a></li>
				<li><a href="aboutUsSinhala.html"><i class="fa fa-user"></i>අපි ගැන</a></li>
				<li><a href="newsSinhala.html"><i class="fa fa-comment-lines"></i>පුවත්</a></li>
				<li><a href="contactSinhala.html"><i class="fa fa-phone"></i>අමතන්න</a></li>
				<li class="active"><a href="#"><i class="fas fa-users-cog"></i>ලොග් වීම</a></li>
			</ul>
		</div>
		</div>

		
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5 bg-light mt-5 px-0">
					<h3 class="text-center text-light bg-danger p-3">Smart Farmer Logging</h3>

					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
						<div class="form-group">
							<input type="text" name="username" class="form-control form-control-lg" placeholder="පරිශීලක නාමය" required="">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control form-control-lg" placeholder="මුරපදය" required="">
						</div>
						<div class="form-group lead">
							<label for="usertype"></label>
							<center><input type="radio" name="usertype" value="admin" class="custom-radio" required>&nbsp;පරිපාලක  |  </input>
							<input type="radio" name="usertype" value="user" class="custom-radio" required>&nbsp;පරිශීලක</input></center>
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-danger btn-block" value="Submit">
						</div>
					<h5 class="text-danger text-center"><?= $msg; ?></h5>
					</form>

					</div>
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
					<p><i class="fa fa-envelope-open"></i>Email Us : <span class="number"><a href="smartfarm@gmail.com" class="info">smartfarm@gmail.com</a></span></p>
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