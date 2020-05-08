<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Add Crop</h2>
	</div>
	
	<form method="post" action="addcrop.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>Area</label>
			<input type="text" name="area" value="<?php echo $area; ?>">
		</div>
		<div class="input-group">
			<label>Crop</label>
			<input type="text" name="crop" value="<?php echo $crop; ?>">
		</div>
		<div class="container"> 
       <br> 
	   
	   <label>Tempreature (c')</label>
	   <br> 
			<input type="text" class="form-control" style="color:blue;width:43%;height:30px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" id="temp1" placeholder="Upper Limit" name="temp1"> 
			<input type="text" class="form-control"  style="color:blue;width:44%;height:30px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" id="temp2" placeholder="Lower limit" name="temp2"> 
		</div>     

		
		<div class="input-group">
	   <label>Soil Condition</label>
			<select  style="color:blue;width:100%;height:40px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" name="soil_condition"id="soil_condition">			
			<option value="Dry soil">Dry soil</option>
			<option value="wet soil">wet soil</option>
			<option value="soil with high stones">soil with high stones</option>
			<option value="Muddy">Muddy</option></select>
		</div>
		
	
		 
		   
			<div class="input-group">
			<label>TimePeriod</label>
			<input type="text" class="form-control" style="color:blue;width:43%;height:30px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" id="cultivated_month" placeholder="Cultivated_month" name="cultivated_month"> 
			<input type="text" class="form-control"  style="color:blue;width:44%;height:30px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" id="harvesting_month" placeholder="Harvesting_month" name="harvesting_month"> 

		</div>
		
		<br>
		<div class="input-group">
			<button type="submit" class="btn" name="add_crop">Add Crop</button>
		</div>
		<p>
			
		</p>
	</form>
	
	
	
</body>
</html>