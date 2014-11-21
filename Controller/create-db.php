<?php
	//Directory of File. return of an include
	require_once(__DIR__ . "/../model/Config.php");

//stores a query
			//creates ech post to have an id, a title, text, and a key
	$query = $connection->query("CREATE TABLE posts ("
			// creates ids for posts
		 . "id int(11) NOT NULL AUTO_INCREMENT,"
		 . "title varchar(255) NOT NULL,"
			// creates post colum
		 . "post text NOT NULL,"
		 	//sets key to id
		 . "PRIMARY KEY (id))");
		//if true
	if($query) {
		echo "<p>Seccessfully created table: posts</p>";
	}
	//if false
	else{
		echo "<p>$connection->error</p>";
	}

	
