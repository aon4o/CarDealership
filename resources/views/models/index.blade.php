<!DOCTYPE html>
<html>
<head>
	<title>Models INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Models</h1>
	<form action="" method="get">
		<input type="hidden" name="search" value="true" />
		Search by name: <input type="text" name="name" />
		Search by brand: <input type="text" name="brand" />
		<input type="submit" value="Search" />
	</form>
	<hr></hr>
	<a href="{{ route('models.create') }}">Create new</a></br>
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
        @foreach ($models as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td><a href="{{ route('models.show', ['model' => $model]) }}">{{ $model->name }}</a></td>
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
        @endforeach
        </tbody>
    </table>
</body>
</html>
