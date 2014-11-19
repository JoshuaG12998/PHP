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
			//opens a connection
	public function openConnection() {
		//establish new connection
		$this->connection = mysqli($this->host, $this->username, $this->password, $this->database);
					
				//Checks if connection has a connection error
		if($this->connection->connect_error){
			die("<p>Error: " . $this->connection->connection_error . "</p>");
		}
	}
			//closes a connection
	public function closeConnection() {
		//checks if there is information present in variable. Return null if no
		if(isset($this->connection)) {
			$this->connection->close();
		}
	}
			//passes a string when we call for query
	public function query($string) {
		$this->openConnection();
			//querry's our connection
		$query = $this->connection->query($string);
			//close our connection
		$this->closeConnection();
			//sees id it's true or false
		return $query;
	}
}