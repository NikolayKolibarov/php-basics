<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Find Primes in Range</title>
</head>
<body>
<form method="post" action="#">
	<div>
	<label for="start">Starting Index:</label>
	<input type="text" name="start" id="start">
	<label for="end">End:</label>
	<input type="text" name="end" id="end">
	<input type="submit" name="submit" value="Submit">
	</div>
</form>
<?php 
		function isPrime($num) {
    if($num == 1)
        return false;
    if($num == 2)
        return true;
    if($num % 2 == 0) {
        return false;
    }
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}
if ($_POST && isset($_POST['submit'])) {
	if (isset($_POST['start']) && isset($_POST['end'])) {
		for ($i=$_POST['start']; $i <= $_POST['end'] ; $i++) { 
			if (isPrime($i) == true) {
				if ($i == $_POST['end']) {
					echo "<b>" . $i . "</b>";
					continue;
				}
				echo "<b>" . $i . "</b>" . ", ";
				continue;
			}
			if ($i == $_POST['end']) {
				echo $i;
				continue;
			}
			echo $i . ", ";
		}
	}
}
 ?>
</body>
</html>