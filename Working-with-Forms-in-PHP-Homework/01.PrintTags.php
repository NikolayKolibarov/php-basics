<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print Tags</title>
</head>
<body>
	<p>Enter Tags:</p>
	<form method="post" action="#">
		<input type="text" name="tags">
		<input type="submit" value="Submit" name="submit">
	</form>
	<?php 
		if ($_POST && isset($_POST['tags'])) {
				$tags =  explode(', ', $_POST['tags']);
				foreach ($tags as $key => $value) {
					echo htmlentities($key . ' : ' . $value) . "</br>";
				}
		}
	?>

</body>
</html>