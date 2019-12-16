<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brands INDEX</title>
</head>
<body>
	<a href="/">Back to Main</a>
	<h1>Brands</h1>
	<form action="{{ route('brands.index') }}" method="get">
		Search by name: <input type="text" name="search" />
		<input type="submit" value="Search" />
	</form>
    <hr/>
	<a href="{{ route('brands.create') }}">Create new</a></br>
    @if($brands->isNotEmpty())
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
    @else
        <p>There's nothing to show!</p>
    @endif
</body>
</html>
