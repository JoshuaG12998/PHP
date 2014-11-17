<?php
// create personal object
class Database {
	// private can only be accessed in this class or a class
	//database holds our variables
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	//creates a new cinstructer
	public function __construct($host, $username, $password, $database) {
		$this->host = $host; 
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
}