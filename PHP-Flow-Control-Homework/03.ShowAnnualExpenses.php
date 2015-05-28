<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Annual Expenses</title>
	<style type="text/css">
	table, td, th {
		border: 1px solid black;
	}
	</style>
</head>
<body>
	<form method="post" action="#">
		<div>
		<label for="years">Enter number of years</label>
		<input type="text" name="years" id="years">
		<input type="submit" name="submit" value="Show costs">
		</div>
	</form>
	<?php 
	if ($_POST && isset($_POST['submit'])) {
		echo 
	"<table>
		<thead>
			<tr>
				<th>Year</th>
				<th>January</th>
				<th>February</th>
				<th>March</th>
				<th>April</th>
				<th>May</th>
				<th>June</th>
				<th>July</th>
				<th>August</th>
				<th>September</th>
				<th>October</th>
				<th>November</th>
				<th>December</th>
				<th>Total:</th>
			</tr>
		</thead>
		<tbody>";
	if (isset($_POST['years'])) {
		$currentYear = date("Y") + 1;
		$sum = 0;
		$tempValue;
		for ($i=0; $i < $_POST['years'] ; $i++) { 
			$currentYear--;
			echo "<tr><td>" . $currentYear . "</td>";
			for ($j=0; $j <= 12; $j++) {
				if ($j == 12) {
					echo "<td>" . $sum . "</td>";
					break;
				} 
				$rndNum = rand(0, 999);
				$tempValue = $rndNum;
				$sum += $tempValue;
				echo "<td>" . $rndNum ."</td>";
			}
			echo "</tr>";
		}
	}
	echo "</tbody></table>";
} 
	 ?>
</body>
</html>