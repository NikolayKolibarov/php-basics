<!DOCTYPE html>
<html>
<head>
	<title>Rich People's Problems</title>
	<style type="text/css">
	table, td, th {
		border: 1px solid black;
	}
	</style>
</head>
<body>
<form method="post" action="#">
	<div>
	<label for="cars">Enter cars</label>
	<input type="text" name="cars" id="cars">
	<input type="submit" name="submit" value="Show result">
	</div>
</form>
<?php 
if ($_POST && isset($_POST['submit'])) {
	echo "<table><thead><th>Car</th><th>Color</th><th>Count</th></thead><tbody>";
	$cars = explode(", ", $_POST['cars']);
	$colorPool = array("Red", "Black", "Yellow", "Orange", "Green", "Purple", "Grey", "Brown", "White");
	if (isset($_POST['cars'])) {
		for ($i=0; $i < count($cars) ; $i++) {
			$randomizer = array_rand($colorPool);
			$color = $colorPool[$randomizer]; 
			echo "<tr><td>" . $cars[$i] . "</td><td>" . $color . "</td><td>" . rand(1, 5) . "</td></tr>" ;
		}
		echo "</tbody></table>";
	}
 }
 ?>
</body>
</html>