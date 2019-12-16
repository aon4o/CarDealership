<!DOCTYPE html>
<html lang="en">
<head>
	<title>Models CREATE</title>
</head>
<body>
	<a href="/">Back to Main</a> </br>
	<a href="{{ route('models.index') }}">Back to Brands</a>
	<h1>Model Create</h1>
    <hr/>
	<form action="{{ route('models.store') }}" method="post">
        @csrf
		<input type="text" name="name" />
        @if($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <!-- <input type="text" name="brand"/>
        @if($errors->has('brand'))
            <p>{{ $errors->first('brand') }}</p>
        @endif
        -->
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>
