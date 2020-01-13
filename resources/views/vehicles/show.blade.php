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
            <th>Model</th>
            <th>Brand</th>
            <th>Engine volume</th>
            <th>Horse power</th>
            <th>Color</th>
            <th>Year made</th>
            <th>Registration number</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $vehicle->id }}</td>
            <td><a href="{{route('models.show', ['model' => $vehicle->model])}}">{{ $vehicle->model->name }}</a></td>
            <td><a href="{{ route('brands.show', ['brand' => $vehicle->model->brand]) }}">{{ $vehicle->model->brand->name }}</a></td>
            <td>{{ $vehicle->engine_volume }}</td>
            <td>{{ $vehicle->horse_power }}</td>
            <td><p style="background-color:{{ $vehicle->color }};">{{ $vehicle->color }}</p></td>
            <td>{{ $vehicle->year_made }}</td>
            <td>{{ $vehicle->reg_num }}</td>
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
