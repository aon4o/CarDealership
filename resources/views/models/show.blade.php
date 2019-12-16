<!DOCTYPE html>
<html>
<head>
	<title>Models SHOW</title>
</head>
<body>
	<a href="/">Back to Main</a></br>
	<a href="{{ route('models.index') }}">Back to Brands</a>
	<h1>Model Show</h1>
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
            <td>{{ $model->id }}</td>
            <td>{{ $model->name }}</td>
            <td><a href="{{ route('brands.show', ['brand' => $model->brand]) }}">{{ $model->brand->name }}</a></td>
            <td><a href="{{ route('models.edit', ['model' => $model]) }}">Edit</a></td>
            <td><form action={{ route('models.destroy', ['model' => $model]) }} method="POST">
                    @csrf
                    @method('DELETE')
                    <input type='hidden' name='id' value="{{$model->id}}">
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</body>
</html>
