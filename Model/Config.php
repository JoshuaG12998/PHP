<?php
			//access post.php
		$path = "/PHP/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";
		//creates new object stored in connection
	$connection = new Database($host, $username, $password, $database);