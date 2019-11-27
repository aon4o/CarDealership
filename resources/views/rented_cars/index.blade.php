<!DOCTYPE html>
<html>
<head>
	<title>Rented Cars INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Rented Cars</h1>
    <form action="index.php" method="get">
		<input type="hidden" name="search" value="true" />
		Search by model: <input type="text" name="model" />
		Search by brand: <input type="text" name="brand" />
		<input type="submit" value="Search" />
	</form>
	<hr></hr>
    <a href="rent_form_2.php">Rent a car</a></br>
	<a href="search_rc.php">Search Rented car</a></br>
	<a href="search_nrc.php">Search Not Rented car</a>
</body>
</html>
