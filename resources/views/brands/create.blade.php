<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brands CREATE</title>
</head>
<body>
	<a href="/">Back to Main</a> </br>
	<a href="{{ route('brands.index') }}">Back to Brands</a>
	<h1>Brand Create</h1>
	<hr></hr>
	<form action="{{ route('brands.store') }}" method="post">
        @csrf
		<input type="text" name="name" />
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>
