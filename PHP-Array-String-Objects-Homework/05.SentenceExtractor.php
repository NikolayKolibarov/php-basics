<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sentence Extractor</title>
</head>
<body>
	<textarea rows="4" cols="50" name="input" form="user-form" placeholder="Enter string..."></textarea>
	<form method="post" action="#" id="user-form">
	<div>
	<label for="word">Word to Check</label>
		<input type="text" name="word" id="word">
		<input type="submit" name="submit" value="Submit">
	</div>
	</form>
	<?php 
	if ($_POST && isset($_POST['submit'])) {
		if (isset($_POST['input']) && isset($_POST['word'])) {
			$sentences = array();
			$word = $_POST['word'];
			//preg_match_all("/[^.?!():@#&]+?[.?!]/", $_POST['input'], $sentences);
			//for sentences that can end with more than ., ! and ?
			preg_match_all("/[^.?!]+?[.?!]/", $_POST['input'], $sentences);
			for ($i=0; $i < count($sentences[0]) ; $i++) { 
				if (preg_match("/\b$word\b/", $sentences[0][$i])) {
					echo $sentences[0][$i] . "</br>";
				}
			}
		}
	}
	 ?>
</body>
</html>