<!DOCTYPE html>
<html lang="en">
<head>
    <title>Models EDIT</title>
</head>
<body>
<a href="/">Back to Main</a> </br>
<a href="{{route('models.index')}}">Back to Models</a>
<h1>Model Edit</h1>
<hr>
<form action={{ route('models.update', ['model' => $model]) }} method="POST">
    @csrf
    @method('PUT')
    Model name: <input type="text" name="name" value="{{ $model->name }}"/></br>
    Model brand:
    <select name="brand_id">
        @foreach($brands as $brand)
            @if($brand->id == $model->brand_id)
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
