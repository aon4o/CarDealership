@extends('layouts.layout')

@section('title', 'Vehicles EDIT')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Vehicle Edit</h1>
        <form action={{ route('vehicles.update', ['vehicle' => $vehicle]) }} method="POST">
            @csrf
            @method('PUT')
            Vehicle brand:
            <select name="model_id">
                @foreach($models as $model)
                    @if($model->id == $vehicle->model_id)
                        <option value="{{ $model->id }}" selected>{{ $model->name.' - '.$model->brand->name }}</option>
                    @else
                        <option value="{{ $model->id }}">{{ $model->name.' - '.$model->brand->name }}</option>
                    @endif
                @endforeach
            </select>
            <br><br>
            <label class="mr-2" for="number">Engine volume:</label><input type="number" name="engine_volume" step="10" maxlength="6" value="{{ $vehicle->engine_volume }}" required/><br><br>
            <label class="mr-2" for="horse_power">Horse power:</label><input type="number" name="horse_power" step="50" maxlength="6" value="{{ $vehicle->horse_power }}" required/><br><br>
            <label class="mr-2" for="color">Color:</label><input type="color" name="color" value="{{ $vehicle->color }}" required/><br><br>
            <label class="mr-2" for="year_made">Year made:</label><input type="number" name="year_made" size="4" value="{{ $vehicle->year_made }}" required /><br><br>
            <label class="mr-2" for="reg_num">Reg number:</label><input type="text" name="reg_num" value="{{ $vehicle->reg_num }}" required minlength="6" maxlength="20"/><br><br>
            <input class="btn btn-dark btn-outline-light" type="submit" value="Submit"/>
        </form>
    </div>
@endsection
