<html>
		<head>
		<title></title>
			<link type="text/css" rel="stylesheet" href="CSS/style.css">
			<link type="text/css" rel="stylesheet" href="CSS/bootstrap.min.css">

				<style>

				</style>
		</head>
<body>
	<?php
			//insert header code here
		require_once(__DIR__ . "/view/Header.php");
			//Links navigation
		require_once(__DIR__ . "/view/Navigation.php");	
		require_once(__DIR__ . "/Controller/create-db.php");
			//insert footer code here
		require_once(__DIR__ . "/view/Footer.php");
		require_once(__DIR__ . "/Controller/read-posts.php");
	?>
</body>
</html>