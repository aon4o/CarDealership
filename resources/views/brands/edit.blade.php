<!DOCTYPE html>
<html>
<head>
	<title>Brands EDIT</title>
</head>
<body>
	<a href="/">Back to Main</a> </br>
	<a href="{{route('brands.index')}}">Back to Brands</a>
	<h1>Brand Edit</h1>
	<hr></hr>
	<form action="/brands/{{$brand->id}}" method="POST">
        @csrf
        @method('PUT')
		<input type='hidden' name='id' value="{{$brand->id}}">
		NEW Brand name: <input type="text" name="name" value="{{$brand->name}}" /></br>
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>
