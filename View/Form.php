<html>
		<head>
		<title></title>
			<link type="text/css" rel="stylesheet" href="CSS/style.css">
			<link type="text/css" rel="stylesheet" href="CSS/bootstrap.min.css">

				<style>

				</style>
		</head>
<body>
<h2>Blog</h2>

<!-- connects path to Config -->
<?php
require_once(__DIR__ . "/../model/Config.php");
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
		<button type="submit">Submit</button>
	</div>
</form>

</body>
</html>