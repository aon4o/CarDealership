<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vehicles INDEX</title>
</head>
<body>
    <a href="/">Back to Main</a>
    <h1>Vehicles</h1>
    <form action="{{ route('vehicles.index') }}" method="get">
        <input type="hidden" name="search1" value="true" />
        Search by model: <select name="model_id">
            @foreach($models as $model)
                    <option value="{{ $model->id }}">{{ $model->name.' - '.$model->brand->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Search" />
    </form><br>
    <hr/>
    <a href="{{ route('vehicles.create') }}">Create new</a><br>
    @if($vehicles->isNotEmpty())
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>Brand</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td><a href="{{ route('vehicles.show', ['vehicle' => $vehicle]) }}">{{ $vehicle->id }}</a></td>
                    <td><a href="{{ route('models.show', ['model' => $vehicle->model]) }}">{{ $vehicle->model->name }}</a></td>
                    <td><a href="{{ route('brands.show', ['brand' => $vehicle->model->brand]) }}">{{ $vehicle->model->brand->name }}</a></td>
                    <td><a href="{{ route('vehicles.edit', ['vehicle' => $vehicle]) }}">Edit</a></td>
                    <td><form action={{ route('vehicles.destroy', ['vehicle' => $vehicle]) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <input type='hidden' name='id' value="{{$vehicle->id}}">
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>There's nothing to show!</p>
    @endif
</body>
</html>
