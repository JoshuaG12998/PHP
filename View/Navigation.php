<link type="text/css" rel="stylesheet" href="CSS/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="CSS/main.css">
<link rel="javascript" type="java" href="main.js">
<link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400"/>
<?php
	//requires config file here
	require_once(__DIR__ . "/../Model/Config.php")
	
?>
<nav>
	<ul>
			<!-- \ means to look for root --> <!-- $path uses the path variable in Config.php-->
		<button type="button" class="btn btn-info"><li><a href="<?php echo $path . "Post.php"?>">Blog Post Form</a></li></button>
	</ul>
</nav>