<?php
	//Directory of File. return of an include
	require_once(__DIR__ . "/../model/database.php");

		//server (name of host), username (user that uses server process), password (empty password)
	$connection = new mysqli($host, $username, $password);

		//Checks if connection has a connection error
	if($connection->connect_error){
		die("Error: " . $connection->connection_error);
	}

	$exists = $connection->select_db($database);

//Creates database
	if(!$exists) {
		// query languge here; either true or false
		$query = $connection->query("CREATE DATABASE $database");

	//Executes
	if($query) {
		echo "Successfully created database: " . $database;
	}
}
//Displays since database already exists
	else {
		echo "Database already exists.";
}


//stores a query
			//creates ech post to have an id, a title, text, and a key
	$query = $connection->query("CREATE TABLE posts ("
			// creates ids for posts
		 . "id int(11) NOT NULL AUTO_INCREMENT,"
		 . "title varchar(255) NOT NULL,"
			// creates post colum
		 . "post text NOT NULL,"
		 	//sets key to id
		 . "PRIMARY KEY (id)");

	$connection->close();
