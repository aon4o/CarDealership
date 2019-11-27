<!DOCTYPE html>
<html>
<head>
	<title>Customers INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Customers</h1>
	<form action="index.php" method="get">
		<input type="hidden" name="search" value="true" />
		Search by first name: <input type="text" name="first_name" />
		Search by last name: <input type="text" name="last_name" />
		<input type="submit" value="Search" />
	</form>
	<hr></hr>
	<a href="{{ route('customers.create') }}">Create new</a></br>
</body>
</html>
