<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers SHOW</title>
</head>
<body>
<a href="/">Back to Main</a><br>
<a href="{{ route('customers.index') }}">Back to Customers</a>
<h1>Customer Show</h1>
<hr/>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Date of Birth</th>
        <th>EGN</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->first_name }}</td>
        <td>{{ $customer->last_name }}</td>
        <td>{{ $customer->born_at }}</td>
        <td>{{ $customer->egn }}</td>
        <td><a href="{{ route('customers.edit', ['customer' => $customer]) }}">Edit</a></td>
        <td><form action={{ route('customers.destroy', ['customer' => $customer]) }} method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete"/>
            </form>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
