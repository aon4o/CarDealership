<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers EDIT</title>
</head>
<body>
<a href="/">Back to Main</a><br>
<a href="{{route('customers.index')}}" title="Customers INDEX">Back to Customers</a>
<h1>Customer Edit</h1>
<hr>
<form action={{ route('customers.update', ['customer' => $customer]) }} method="POST">
    @csrf
    @method('PUT')
    First name: <input type="text" name="first_name" placeholder="First name" value="{{ $customer->first_name }}" required/><br><br>
    Last name: <input type="text" name="last_name" placeholder="Last name" value="{{ $customer->last_name }}" required/><br><br>
    Date of birth: <input type="date" name="born_at" max="{{ $date->format("Y-m-d") }}" value="{{ $customer->born_at }}" required/><br><br>
    EGN: <input type="number" name="egn" placeholder="0000000000" size="10" value="{{ $customer->egn }}" required/><br><br>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>
