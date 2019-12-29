<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vehicles EDIT</title>
</head>
<body>
<a href="/">Back to Main</a> </br>
<a href="{{route('vehicles.index')}}">Back to Vehicles</a>
<h1>Vehicle Edit</h1>
<hr>
<form action={{ route('vehicles.update', ['vehicle' => $vehicle]) }} method="POST">
    @csrf
    @method('PUT')
    <input type='hidden' name='id' value="{{$vehicle->id}}">
    Vehicle name: <input type="text" name="name" value="{{ $vehicle->name }}"/></br>
    Vehicle brand:
    <select name="brand_id">
        @foreach($brands as $brand)
            @if($brand->id == $vehicle->brand_id)
                <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
            @else
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endif
        @endforeach
    </select>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>
