<?php 
	session_start();

	// variable declaration
	$area = "";
	$crop  = "";
	$temp1="";
	$temp2="";
	$soil_condition="";
	$fertilizerName = "";
	$fertilizerUnit ="";
	$fertilizerValue ="";
	$harvesting_month="";
	$cultivated_month = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";
	$GUID = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root','', 'testphp1');
	
	
     $GUID = rand(10,100);
	// Add Crop
	if (isset($_POST['add_crop'])) {
	
		// receive all input values from the form
	
		$area = mysqli_real_escape_string($db, $_POST['area']);
		$crop = mysqli_real_escape_string($db, $_POST['crop']);
		$temp1 = mysqli_real_escape_string($db, $_POST['temp1']);
		$temp2 = mysqli_real_escape_string($db, $_POST['temp2']);
		$soil_condition = mysqli_real_escape_string($db, $_POST['soil_condition']);
		//fertilizer detail are in here before
		$cultivated_month = mysqli_real_escape_string($db, $_POST['cultivated_month']);
		$harvesting_month= mysqli_real_escape_string($db, $_POST['harvesting_month']);
	

		// form validation: ensure that the form is correctly filled
		if (empty($area)) { array_push($errors, "Area is required"); }
		if (empty($crop)) { array_push($errors, '$fertilizerName'); }
		if (empty($temp1)) { array_push($errors, "Upper limit of temprature is required"); }
		if (empty($temp2)) { array_push($errors, "Lower limit of temprature is required"); }
		if (empty($soil_condition)) { array_push($errors, "Soil is required"); }
		//fertilizer details are in here before
		
		if (empty($cultivated_month)) { array_push($errors, "Cultivated month is required"); }
		if (empty($harvesting_month)) { array_push($errors, "Harvesting month is required"); }
		

		// Save crops
		if (count($errors) == 0) {
		echo '$GUID';
		
	    $query = "INSERT INTO crop_details(crop_id,area,crop_name,temp1,temp2,soil_condition,
			cultivate_month,harvest_month) VALUES('','$area','$crop','$temp1','$temp2',
			'$soil_condition','$cultivated_month','$harvesting_month')";						
        
		//$query = INSERT INTO test(crop_name,temp1,temp2) values('$crop','$temp1','$temp2');
         
			mysqli_query($db, $query); 

		}
		//Save Fertilizer
		
			header('location: index.php');
	
	}
  
  
  // Add Fertilizer
	if (isset($_POST['add_fertilizer'])) {
	
		$result= mysqli_query($db,"SELECT MAX(crop_id) AS maximum FROM crop_details");
		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			
			$maximum =$row['maximum'];
		}
		} else {
			echo "0 results";
		}
      
	  //receive all fertilizer values from the form
        $fertilizerName = mysqli_real_escape_string($db, $_POST['fertilizerName']);
		$fertilizerUnit = mysqli_real_escape_string($db, $_POST['fertilizerUnit']);
		$fertilizerValue = mysqli_real_escape_string($db, $_POST['fertilizerValue']);
      
	  
	  // form validation: ensure that the form is correctly filled
        if (empty($fertilizerName)) { array_push($errors, "Fertilizer name is required"); }
		if (empty($fertilizerUnit)) { array_push($errors, "Fertilizer unit is required"); }
		if (empty($fertilizerValue)) { array_push($errors, "Fertilizer value is required"); }
   
   
     //create guid id for the fertilizer 
	  
		if (count($errors) == 0) {
	    $query1 = "INSERT into fertilizer(guid_id,fertilizer_name,fertilizer_unit,fertilizer_value) VALUES('$maximum','$fertilizerName','$fertilizerUnit','$fertilizerValue')";						
       mysqli_query($db, $query1); 

		}
    } 
	// ... 
	// VIew Fetilizer
	/*if (isset($_POST['viewcrop'])) {
	$result= mysqli_query($db,"SELECT *  FROM crop_details");
		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			
			$cropId =$row['crop_id'];
			$cropId =$row['cropName'];
			$cropId =$row['temp1'];
			$cropId =$row['temp2'];
			$cropId =$row['crop_id'];
		}
		} else {
			echo "0 results";
		}
	}*/
	/*// LOGIN USER
	if (isset($_POST['addcrop'])) {
		
		$area = mysqli_real_escape_string($db, $_POST['area']);
		$crop = mysqli_real_escape_string($db, $_POST['crop']);
		$soil = mysqli_real_escape_string($db, $_POST['soil']);
		$temp = mysqli_real_escape_string($db, $_POST['temp']);
		$fertilizer = mysqli_real_escape_string($db, $_POST['fertilizer']);
		$timeperiod = mysqli_real_escape_string($db, $_POST['timeperiod']);
		//$password = mysqli_real_escape_string($db, $_POST['password']);

		
		if (empty($crop)) {
			array_push($errors, "Crop is required");
		}
		if (empty($area)) {
			array_push($errors, "Area is required");
		}
	/*if (empty($temp)) {
			array_push($errors, "Temprature is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
           */
	//<!--//	if (count($errors) == 0) {
			//$password = md5($password);
		//	$query = "SELECT * FROM users WHERE crop='$crop' AND area='$area'";//conditions may apply and cheek th 
		//	$results = mysqli_query($db, $query);

			//if (mysqli_num_rows($results) == 1) {
				//$_SESSION['area'] = $area;
			//	$_SESSION['success'] = "You are now logged in";
			//	header('location: index.php');
			//}else {
				//array_push($errors, "Wrong area/password combination");
		//	}
		//}-->
	//}

?>