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
			header("location:google.com");
		}
		else if ($result->num_rows==1 && $_SESSION['role']=='User') {
			header("location:https:smartFarming.php");
		}
		else{
			$msg = "Username or Password is incorrect...";
		}
	}
?>