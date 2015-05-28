<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modify String</title>
</head>
<body>
	<body>
	<form method="post" action="#">
	<div>
	<input type="text" name="input">
	<input type="radio" name="option" value="palindrome-check" id="palindrome">
	<label for="palindrome">Check Palindrome</label>
	<input type="radio" name="option" value="reverse" id="reverse">
	<label for="reverse">Reverse String</label>
	<input type="radio" name="option" value="split" id="split">
	<label for="split">Split</label>
	<input type="radio" name="option" value="hash" id="hash">
	<label for="hash">Hash String</label>
	<input type="radio" name="option" value="shuffle" id="shuffle">
	<label for="shuffle">Shuffle String</label>
	<input type="submit" name="submit" value="Submit" id="">
	</div>
</form>
<?php 
if ($_POST && isset($_POST['submit'])) {
	if (isset($_POST['input']) && isset($_POST['option'])) {
		if ($_POST['option'] == 'palindrome-check') {
			if ($_POST['input'] == strrev($_POST['input'])) {
				echo $_POST['input'] . " is a palindrome!";
			} else {
				echo $_POST['input'] . " is not a palindrome!";
			}
		}
		
		if ($_POST['option'] == 'reverse') {
				echo strrev($_POST['input']);
			}	
		
		if ($_POST['option'] == 'split') {
			$charArray = str_split($_POST['input']);
				foreach ($charArray as $key => $value) {
					echo $value . " ";
			}
		}
		
		if ($_POST['option'] == 'hash') {
			$hashedString = crypt($_POST['input'], '$2a$09$go$neverfor$83$nightmarecocksmash$05$');
			echo $hashedString;
		}

		if ($_POST['option'] == 'shuffle') {
			echo str_shuffle($_POST['input']);
		}
	}
}
 ?>
</body>
</html>