<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculate Interest</title>
	<style>
		input {
			display: block;
		}
	</style>
</head>
<body>
	<form method="get" action="#">
		<label for="money">Enter Amount</label>
		<input type="text" name="money" id="money">
		<label for="usd">USD</label>
		<input type="radio" name="currency" id="usd" value="usd">
		<label for="eur">EUR</label>
		<input type="radio" name="currency" id="eur" value="eur">
		<label for="bgn">BGN</label>
		<input type="radio" name="currency" id="bgn" value="bgn">
		<label for="interest">Compound Interest Amount</label>
		<input type="text" name="interest" id="interest">
		<select name="time">
			<option value="6">6 Months</option>
			<option value="12">1 Year</option>
			<option value="24">2 Years</option>
			<option value="60">5 Years</option>
		</select>
		<input type="submit" name="submit" value="Calculate">
	</form>
	<?php 
		if ($_GET && isset($_GET['money']) && isset($_GET['currency']) && isset($_GET['interest']) && isset($_GET['time'])) {
				$money = $_GET['money'];
				$currency = $_GET['currency'];
				$interest = $_GET['interest'];
				$time = $_GET['time'];
			}

		if (isset($_GET['submit'])) {
			$interestPerMonth = $interest / 12;
			$result;
			$temp = $money;
			for ($i=0; $i < $time; $i++) { 
				$result = $temp * ((100 + $interestPerMonth) / 100);
				$temp = $result;
			}
			
			if ($_GET['currency'] == 'usd') {
				echo "$ " . number_format((float)$result, 2, '.', '');
			}

			if ($_GET['currency'] == 'eur') {
				echo "€ " . number_format((float)$result, 2, '.', '');;
			}

				if ($_GET['currency'] == 'bgn') {
				echo "BGN " . number_format((float)$result, 2, '.', '');
			}
		}
	?>
</body>
</html>