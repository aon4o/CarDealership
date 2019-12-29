<!DOCTYPE html>
<html>
<head>
	<title>Vehicles SHOW</title>
</head>
<body>
	<a href="/">Back to Main</a></br>
	<a href="{{ route('vehicles.index') }}">Back to Brands</a>
	<h1>Vehicle Show</h1>
	<hr></hr>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $vehicle->id }}</td>
            <td>{{ $vehicle->name }}</td>
            <td><a href="{{ route('brands.show', ['brand' => $vehicle->brand]) }}">{{ $vehicle->brand->name }}</a></td>
            <td><a href="{{ route('vehicles.edit', ['vehicle' => $vehicle]) }}">Edit</a></td>
            <td><form action={{ route('vehicles.destroy', ['vehicle' => $vehicle]) }} method="POST">
                    @csrf
                    @method('DELETE')
                    <input type='hidden' name='id' value="{{$vehicle->id}}">
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</body>
</html>
