@extends('layouts.layout')

@section('title', 'Models SHOW')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Model Show</h1>
        <hr/>
        <table class="table table-hover table-bordered table-striped text-white-50">
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
                <td><a class="btn btn-dark" href="{{ route('brands.show', ['brand' => $model->brand]) }}">{{ $model->brand->name }}</a></td>
                <td>
                    <a class="btn btn-warning" href="{{ route('models.edit', ['model' => $model]) }}">Edit</a>
                    <form style="display: inline-block" action={{ route('models.destroy', ['model' => $model]) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <input type='hidden' name='id' value="{{$model->id}}">
                        <input class="btn btn-danger" type="submit" value="Delete"/>
                    </form>
                    <form style="display: inline-block" action="{{ route('vehicles.index') }}" method="get">
                        <input type="hidden" name="search1" value="true" />
                        <input type="hidden" name="model_id" value="{{ $model->id }}">
                        <input class="btn btn-info" type="submit" value="Get Vehicles" />
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
