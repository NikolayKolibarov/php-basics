<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Text Filter</title>
</head>
<body>
	<textarea rows="4" cols="50" name="input" form="user-form" placeholder="Enter string..."></textarea>
	<form method="post" action="#" id="user-form">
	<div>
	<label for="banlist">Banlist</label>
		<input type="text" name="banlist" id="banlist">
		<input type="submit" name="submit" value="Submit">
	</div>
	</form>
	<?php 
	function asterisksReplacer($asterisksSize) {
		$asterisksCounter = "";
		for ($i=0; $i < $asterisksSize ; $i++) { 
			$asterisksCounter = $asterisksCounter . "*"; 
		}
		return $asterisksCounter;
	}
	if ($_POST && isset($_POST['submit'])) {
		if (isset($_POST['input']) && isset($_POST['banlist'])) {
			$bannedWords = explode(", ", $_POST['banlist']);
			$output = $_POST['input'];
			for ($i=0; $i < count($bannedWords) ; $i++) { 
				$output = str_replace($bannedWords[$i], asterisksReplacer(strlen($bannedWords[$i])), $output);
			}
			echo $output;
		}
	}
	 ?>
</body>
</html>