<!DOCTYPE html>
<html lang="en">
<head>
	<title>Models CREATE</title>
</head>
<body>
	<a href="/">Back to Main</a> </br>
	<a href="{{ route('models.index') }}">Back to Models</a>
	<h1>Model Create</h1>
    <hr/>
	<form action="{{ route('models.store') }}" method="post">
        @csrf
		Model's name:
        <input type="text" name="name" required/>
        @if($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <br>
        Model's brand:
        <select name="brand_id" required>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>
