<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coloring Texts</title>
	<style type="text/css">
	.even {
		color: red;
	}

	.odd {
		color: blue;
	}
	</style>
</head>
<body>
	<textarea rows="4" cols="50" name="input" form="user-form" placeholder="Enter string..."></textarea>
	<form method="post" action="#" id="user-form">
		<input type="submit" name="submit" value="Color text">
	</form>
	<?php 
	function isEven ($number) {
		if ($number % 2 == 0) {
			return true;
		} else {
			return false;
		}
	}
	if ($_POST && isset($_POST['submit'])) {
		if (isset($_POST['input'])) {
			$charArray = str_split($_POST['input']);
			foreach ($charArray as $key => $value) {
				if (isEven(ord($value)) == true) {
					echo "<span class=\"even\">" . $value . "</span>" ." ";
				} else {
					echo "<span class=\"odd\">" . $value . "</span>" ." ";
				}
			}
		}
	}
	 ?>
</body>
</html>