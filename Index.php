
	<?php
		require_once(__DIR__ . "/controller/login-verify.php");
			//insert header code here
		require_once(__DIR__ . "/view/Header.php");
		//shows navigation only if user is authenticated
		if(authenticateUser()) {
			//Links navigation
		require_once(__DIR__ . "/view/Navigation.php");
		}	
		//require_once(__DIR__ . "/Controller/create-db.php");
			//insert footer code here
		require_once(__DIR__ . "/Controller/read-posts.php");
		require_once(__DIR__ . "/view/Footer.php");
	?>
