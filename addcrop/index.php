
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
            <form method="post">

		
			<div class="input-group">
			
			
			<label>Fertilizer(Can select multiple nutirent)</label>
			
			
			<select type="text" style="color:blue;width:26%;height:40px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;" name="fertilizerName" id="fertilizerName"> 
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
			
			
			<button  type="submit" name="add_fertilizer" style="color:blue;width:20%;height:40px;border-radius: 5px; border: 1px solid gray;padding: 5px 10px; font-size: 16px;"  >Add</button>
		   
		 </div>

		</form>
</body>
</html>