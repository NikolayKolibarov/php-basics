<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sum Of Digits</title>
	<style type="text/css">
	table, td {
		border: 1px solid black;
	}
	</style>
</head>
<body>
	<form method="post" action="#">
	<div>
	<label for="numbers">Input string:</label>
	<input type="text" name="numbers" id="numbers">
	<input type="submit" name="submit" value="Submit">
	</div>
</form>
<?php 
	if ($_POST && isset($_POST['submit'])) {
		if (isset($_POST['numbers'])) {
			echo "<table><tbody>";
			$numbers = explode(", ", $_POST['numbers']);
			for ($i=0; $i < count($numbers); $i++) { 
				$sum = 0;
				echo "<tr><td>" . $numbers[$i] . "</td>";
				if (!is_numeric($numbers[$i])) {
					echo "<td>I cannot sum that</td></tr>";
				} else {
					$sum = ($numbers[$i] % 10) + (($numbers[$i] / 10) % 10) + (($numbers[$i] / 100) % 10) + (($numbers[$i] / 1000) % 10);
					echo "<td>" . $sum . "</td></tr>";
				}
			}
			echo "</tbody></table>";
		}
	}
 ?>
</body>
</html>