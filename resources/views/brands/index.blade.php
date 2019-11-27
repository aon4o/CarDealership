<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brands INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Brands</h1>
	<form action="/" method="get">
		<input type="hidden" name="search" value="true" />
		Search by name: <input type="text" name="name" />
		<input type="submit" value="Search" />
	</form>
	<hr></hr>
	<a href="brands/create">Create new</a></br>
    <p>{{$brand->name}}</p>
</body>
</html>
