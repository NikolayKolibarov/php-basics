<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>URL Replacer</title>
</head>
<body>
	<textarea rows="4" cols="50" name="input" form="user-form" placeholder="Enter string..."></textarea>
	<form method="post" action="#" id="user-form">
		<input type="submit" name="submit" value="Replace">
	</form>
	<?php 
	function replaceURL($string) {
		if ($string == "<a href=") {
			return "[URL=";
		} elseif ($string == "\">") {
			return "]";
		} else {
			return "[/URL]";
		}
	}
	if ($_POST && isset($_POST['submit'])) {
		if (isset($_POST['input'])) {
			$replacer = array("<a href=", "\">", "</a>");
			$output = $_POST['input'];
			for ($i=0; $i < count($replacer); $i++) { 
				$output = str_replace($replacer[$i], replaceURL($replacer[$i]), $output);
			}
			echo $output;
		}
	}
	 ?>
</body>
</html>