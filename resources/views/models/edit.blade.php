<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brands EDIT</title>
</head>
<body>
	<a href="/">Back to Main</a> </br>
	<a href="{{route('models.index')}}">Back to Brands</a>
	<h1>Brand Edit</h1>
	<hr>
	<form action={{ route('models.update', ['model' => $model]) }} method="POST">
        @csrf
        @method('PUT')
		<input type='hidden' name='id' value="{{$model->id}}">
		NEW Brand name: <input type="text" name="name" value="{{$model->name}}" /></br>
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>
