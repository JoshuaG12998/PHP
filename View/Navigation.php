<?php
	//requires config file here
	require_once(__DIR__ . "/../Model/Config.php")
	require_once(__DIR__ . "/../Controller/login-verify.php");

if(!authenticateUser()) {
	header("Location: " . $path . "Index.php");
	die();
}
?>
<nav>
	<ul>
			<!-- \ means to look for root --> <!-- $path uses the path variable in Config.php-->
		<li><a href="<?php echo $path . "Post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>