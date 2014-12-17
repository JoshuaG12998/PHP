
<link type="text/css" rel="stylesheet" href="CSS/form.css">
<!-- connects path to Config -->
<?php
require_once(__DIR__ . "/../model/Config.php");
require_once(__DIR__ . "/../Controller/login-verify.php");

if(!authenticateUser()) {
	header("Location: " . $path . "Index.php");
	die();
}
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "Controller/create-post.php"; ?>">
	<div>
			<!-- Creates visual --> <!-- Creates text area -->
		<label for="title">Title: </label>
		<input type="text" name="title" />
	</div>

	<div>
			<!-- Creates text box  -->
		<label fir="post">Post: </label>
		<textarea name="post"></textarea>
	</div>
			<!--Creates button -->
	<div>
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
</form>


<button type="button" class="btn btn-info"><a href="index.php"><h3>Return back to blog</h3></a></button>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>