<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//creates a unique hash password
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	$hashedPassword = crypt($password, $salt);

	//query database
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
			//sets certain information
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");

		//checks if query is successful
	if($query) {
		echo "Successfully created user: $username";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}