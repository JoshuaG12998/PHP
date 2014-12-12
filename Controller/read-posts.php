<?php

	require_once(__DIR__ . "/../model/config.php");
		//retrieves posts from database
	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);

	if($result) {
		while($row = mysqli_fetch_array($result)) {
			echo "<div class='Posts'>";
			echo "<h3>" . $row['title'] . "</h3>";
			echo "<br />";
			echo "<p>" . $row['post'] . "</h1>";
			echo "<br/>";
			echo "</div";
		}
	}
	?>