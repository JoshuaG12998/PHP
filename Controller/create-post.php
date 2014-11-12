<?php

	//saves information from submit button

	//access' variables in database.php
	require_once(__DIR__ . "/../model/database.php");

	//opens connection
	$connection = new mysqli($host, $username, $password, $database);
	//filters input so no one can hack                   //sanitizes illegal characters
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

		//Echos variables that was posted
	echo "<p>Title: $title</p>";
	echo "<p>Post: post</p>";

	//close connection
	$connection->close();