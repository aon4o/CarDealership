@extends('layouts.layout')

@section('title', 'Vehicles INDEX')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Vehicles</h1>
        <form class="form-inline col-12" action="{{ route('vehicles.index') }}" method="get">
            <label class="text-white-50 mr-2 mb-2" for="model_id">Search by model:</label>
            <select class="custom-select mb-2 mr-2" name="model_id">
                @foreach($models as $model)
                    @if(isset($_GET['model_id']))
                        @if($_GET['model_id'] == $model->id)
                            <option value="{{ $model->id }}" selected>{{ $model->name.' - '.$model->brand->name }}</option>
                        @else
                            <option value="{{ $model->id }}">{{ $model->name.' - '.$model->brand->name }}</option>
                        @endif
                    @else
                        <option value="{{ $model->id }}">{{ $model->name.' - '.$model->brand->name }}</option>
                    @endif
                @endforeach
            </select>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Search" />
        </form><br>
        <hr/>
        <a class="btn btn-dark btn-outline-light m-2" href="{{ route('vehicles.create') }}">Create new</a><br>
        <div class="w-100"></div>
        @if($vehicles->isNotEmpty())
            <div class="m-2">
                <table class="table table-hover table-bordered table-striped text-white-50">
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
                            <td><a class="btn btn-dark" href="{{ route('vehicles.show', ['vehicle' => $vehicle]) }}">{{ $vehicle->id }}</a></td>
                            <td><a class="btn btn-dark" href="{{ route('models.show', ['model' => $vehicle->model]) }}">{{ $vehicle->model->name }}</a></td>
                            <td><a class="btn btn-dark" href="{{ route('brands.show', ['brand' => $vehicle->model->brand]) }}">{{ $vehicle->model->brand->name }}</a></td>
                            <td><a class="btn btn-warning" href="{{ route('vehicles.edit', ['vehicle' => $vehicle]) }}">Edit</a>
                            <form action={{ route('vehicles.destroy', ['vehicle' => $vehicle]) }} method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <input type='hidden' name='id' value="{{$vehicle->id}}">
                                    <input class="btn btn-danger" type="submit" value="Delete"/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>There's nothing to show!</p>
        @endif
    </div>
@endsection
