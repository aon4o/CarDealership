<!DOCTYPE html>
<html>
<head>
	<title>Brands EDIT</title>
</head>
<body>
	<a href="../index.php">Back to Main</a> </br>
	<a href="index.php">Back to Brands</a>
	<h1>Brand Edit</h1>
	<hr></hr>
	<form action="update.php" method="get">
		<input type='hidden' name='id' value="<?php echo $record['id']; ?>">
		NEW Brand name: <input type="text" name="name" value="<?php echo $record['name']; ?>" /></br>
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>
