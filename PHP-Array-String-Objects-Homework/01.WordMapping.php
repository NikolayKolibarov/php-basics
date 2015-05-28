<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Word Mapping</title>
	<style type="text/css">
	table, td {
		border: 1px solid black;
		background-color: #D3D3D3;
	}
	</style>
</head>
<body>
<textarea rows="4" cols="50" name="input" form="user-form" placeholder="Enter string..."></textarea>
	<form method="post" action="#" id="user-form">
		<input type="submit" name="submit" value="Count Words">
	</form>
	<?php 
	function wordFrequencies ($array) {
	$wordFrequencies = array();
	$modifiedArray = array();
	for ($i=0; $i < count($array); $i++) { 
		array_push($modifiedArray, strtolower($array[$i]));
	}
	for ($i=0; $i < count($modifiedArray) ; $i++) {
	$currentTag = $modifiedArray[$i];
	$counter = 1; 
		for ($j= $i + 1; $j < count($modifiedArray) ; $j++) { 
			if ($currentTag == $modifiedArray[$j]) {
				$counter++;
			}
		}
		if (!array_key_exists($currentTag, $wordFrequencies)) {
			$wordFrequencies[$currentTag] = $counter;
		}
	}
		return $wordFrequencies;
	}
	if ($_POST && isset($_POST['submit'])) {
		echo "<table><tbody>";

		if (isset($_POST['input'])) {
			$keywords = array();
			preg_match_all("/\w+/", $_POST['input'], $keywords);
			$frequencyArr = wordFrequencies($keywords[0]);	
			foreach ($frequencyArr as $key => $value) {
				echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
			}
		}
		echo "</tbody></table>";
	}
	 ?>
</body>
</html>