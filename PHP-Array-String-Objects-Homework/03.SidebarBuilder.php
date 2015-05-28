<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sidebar Builder</title>
	<style type="text/css">
	.box {
		background-color: #AFC7E8;
		width: 10%;
		border-radius: 5px;
	}
	</style>
</head>
<body>
	<form method="post" action="#">
		<div>
		<label for="categories">Categories:</label>
		<input type="text" name="categories" id="categories">
		</div>
		<div>
		<label for="tags">Tags:</label>
		<input type="text" name="tags" id="tags">
		</div>
		<div>
		<label for="months">Months:</label>
		<input type="text" name="months" id="months">
		</div>
		<input type="submit" name="submit" value="Generate">
	</form>
	<?php 
	function buildSidebar($heading, $links) {
		for ($i=0; $i < count($links); $i++) { 
				if ($i == 0) {
					echo "<div class=\"box\"><ul>";
					echo "<h2>" . $heading . "</h2>";
				}
				echo "<li><a href=\"#\">" . $links[$i] . "</a></li>";
			}
			echo "</ul></div>";
	}
	if ($_POST && isset($_POST['submit'])) {
		if ($_POST && isset($_POST['categories']) && isset($_POST['tags']) && isset($_POST['months'])) {
			$categories = explode(", ", $_POST['categories']);
			$tags = explode(", ", $_POST['tags']);
			$months = explode(", ", $_POST['months']);
			$categoriesHeading = 'Categories';
			$tagsHeading = 'Tags';
			$monthsHeading = 'Months';

			buildSidebar($categoriesHeading, $categories);
			buildSidebar($tagsHeading, $tags);
			buildSidebar($monthsHeading, $months);
		}
	}
	 ?>
</body>
</html>