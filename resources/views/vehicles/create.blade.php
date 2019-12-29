<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vehicles CREATE</title>
</head>
<body>
	<a href="/">Back to Main</a> </br>
	<a href="{{ route('vehicles.index') }}">Back to Vehicles</a>
	<h1>Vehicle Create</h1>
    <hr/>
	<form action="{{ route('vehicles.store') }}" method="post">
        @csrf
        Vehicle's model:
        <select name="model_id" required>
            @foreach($models as $model)
                <option value="{{ $model->id }}">{{ $model->name ." - ". $model->brand->name }}</option>
            @endforeach
        </select>
        <br><br>
        Engine volume: <input type="number" name="engine_volume" step="10" maxlength="6" required/><br><br>
        Horse power: <input type="number" name="horse_power" step="50" maxlength="6" required/><br><br>
        Color: <input type="color" name="color" required/><br><br>
        Year made: <input type="number" name="year_made" size="4" required /><br><br>
        Reg number: <input type="text" name="reg_num" required minlength="6" maxlength="20"/><br><br>
		<input type="submit" value="Submit"/>
	</form>
</body>
</html>
