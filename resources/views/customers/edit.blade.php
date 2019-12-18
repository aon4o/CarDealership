<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers EDIT</title>
</head>
<body>
<a href="/">Back to Main</a> </br>
<a href="{{route('customers.index')}}">Back to Customers</a>
<h1>Customer Edit</h1>
<hr>
<form action={{ route('customers.update', ['customer' => $customer]) }} method="POST">
    @csrf
    @method('PUT')
    <input type='hidden' name='id' value="{{$customer->id}}">
    NEW Customer name: <input type="text" name="name" value="{{ $customer->name }}" required/></br>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>
