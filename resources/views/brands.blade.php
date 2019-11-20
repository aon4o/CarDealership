<!DOCTYPE html>
<html>
<head>
	<title>Brands INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Brands</h1>
	<form action="index.php" method="get">
		<input type="hidden" name="search" value="true" />
		Search by name: <input type="text" name="name" />
		<input type="submit" value="Search" />
	</form>
	<hr></hr>
	<a href="create.php">Create new</a></br>
	<?php
	$cols = ['id', 'name'];
	?>
</body>
</html>
