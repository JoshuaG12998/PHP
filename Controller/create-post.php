<?php

	//saves information from submit button

	//filters input so no one can hack                   //sanitizes illegal characters
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

		//Echos variables that was posted
	echo "<p>Title: $title</p>";
	echo "<p>Post: post</p>";