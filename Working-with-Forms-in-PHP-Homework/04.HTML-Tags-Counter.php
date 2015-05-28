<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Tags Counter</title>
</head>
<body>
	<label for="html-tags"> Enter HTML tags: </label>
	<form method="get" action="#">
		<input type="text" name="html-tags" id="html-tags">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
	$tagArray = array("html", "head", "body", "div", "span", "DOCTYPE", "title", "link", "meta", "style", "p", "h1", "h2", "h3", "h4", "h5", "h6", "strong", "em", "abbr", "acronym", "adress", "bdo", "blockquote", "cite", "q", "code", "ins", "del", "dfn", "kbd", "pre", "samp", "var", "br", "a", "base", "img", "area", "map", "object", "param", "ul", "ol", "li", "dl", "dt", "dd", "table", "tr", "td", "th", "tbody", "thead", "tfoot", "col", "colgroup", "caption", "form", "input", "textarea", "select", "option", "optgroup", "button", "label", "fieldset", "legend", "script", "noscript", "b", "i", "tt", "sub", "sup", "big", "small", "hr");
	$checker = 0;
	if (!isset($_SESSION['score'])) {
		$_SESSION['score'] = 0;
	} else {
			 if ($_GET && isset($_GET['html-tags'])) {
			 	for ($i=0; $i < count($tagArray); $i++) { 
			 		if (strtolower($_GET['html-tags']) == $tagArray[$i]) {
			 			$checker++;
			 			$_SESSION['score']++;
			  		} 
			 	}
			 	if ($checker == 1) {
			 		echo "Valid HTML tag!" . "</br>";
			 		echo "Score: " . $_SESSION['score'];
			 	} else {
			 		echo "Invalid HTML tag!" . "</br>";
			 		echo "Score: " . $_SESSION['score'];
			 	}
			}
		}
	 ?>
</body>
</html>