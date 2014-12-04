<html>
<head>
<title></title>
 <link rel="stylesheet" media="screen and (min-width: 0px)" type="text/css" href="CSS/ipad.css">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content='width=768'>

<style type="text/css"></style>
</head>
<body>






<?php

	//saves information from submit button

	//access' variables in database.php
	require_once(__DIR__ . "/../model/Config.php");

	//filters input so no one can hack                   //sanitizes illegal characters
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
		//creates time
	$date = new DateTime('today');
		//sets timezone
	$time = new DateTime('America/Los_Angeles');

		//running a query on database. Inserting query to table "post" and sets value "posts"
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

	//true or false for querry
if($query) {
	echo "<p>Successfully inserted post: $title</p>";
		//creates date and time
	echo "Posted on: " . $date->format("M/D/Y") . " at " . $time->format("g:i");	
}
else {
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

?>
<footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>

</footer>
	</body>
	</html>