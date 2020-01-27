@extends('layouts.layout')

@section('title', 'Vehicles SHOW')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Vehicle Show</h1>
        <div class="m-2">
            <table class="table table-hover table-bordered table-striped text-white-50">
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
                    <td><a class="btn btn-dark" href="{{route('models.show', ['model' => $vehicle->model])}}">{{ $vehicle->model->name }}</a></td>
                    <td><a class="btn btn-dark" href="{{ route('brands.show', ['brand' => $vehicle->model->brand]) }}">{{ $vehicle->model->brand->name }}</a></td>
                    <td>{{ $vehicle->engine_volume }}</td>
                    <td>{{ $vehicle->horse_power }}</td>
                    <td><p style="background-color:{{ $vehicle->color }};">{{ $vehicle->color }}</p></td>
                    <td>{{ $vehicle->year_made }}</td>
                    <td>{{ $vehicle->reg_num }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('vehicles.edit', ['vehicle' => $vehicle]) }}">Edit</a>
                        <form style="display: inline-block" action={{ route('vehicles.destroy', ['vehicle' => $vehicle]) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <input type='hidden' name='id' value="{{$vehicle->id}}">
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
