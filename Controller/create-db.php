<?php
	//Directory of File. return of an include
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

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
		echo "Database already exists";
}

	$connection->close();