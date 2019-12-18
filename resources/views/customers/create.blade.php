<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers CREATE</title>
</head>
<body>
<a href="/">Back to Main</a> </br>
<a href="{{ route('customers.index') }}">Back to Customers</a>
<h1>Customer Create</h1>
<hr></hr>
<form action="{{ route('customers.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name"/>
    @if($errors->has('name'))
        <p>{{ $errors->first('name') }}</p>
    @endif
    <input type="submit" value="Submit"/>
</form>
</body>
</html>
