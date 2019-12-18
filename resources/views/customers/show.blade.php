<!DOCTYPE html>
<html>
<head>
    <title>Customers SHOW</title>
</head>
<body>
<a href="/">Back to Main</a></br>
<a href="{{ route('brands.index') }}">Back to Customers</a>
<h1>Customer Show</h1>
<hr></hr>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $brand->id }}</td>
        <td>{{ $customer->name }}</a></td>
        <td><a href="{{ route('customers.edit', ['customer' => $customer]) }}">Edit</a></td>
        <td><form action={{ route('customers.destroy', ['customer' => $customer]) }} method="POST">
                @csrf
                @method('DELETE')
                <input type='hidden' name='id' value="{{$customer->id}}">
                <input type="submit" value="Delete"/>
            </form>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
