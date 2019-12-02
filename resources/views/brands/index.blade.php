<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brands INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Brands</h1>
	<form action="/" method="get">
		<input type="hidden" name="search" value="true" />
		Search by name: <input type="text" name="name" />
		<input type="submit" value="Search" />
	</form>
	<hr></hr>
	<a href="{{ route('brands.create') }}">Create new</a></br>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td><a href="{{ route('brands.show', ['brand' => $brand]) }}">{{ $brand->name }}</a></td>
                <td><a href="{{ route('brands.edit', ['brand' => $brand]) }}">Edit</a></td>
                <td><form action={{ route('brands.destroy', ['brand' => $brand]) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <input type='hidden' name='id' value="{{$brand->id}}">
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
