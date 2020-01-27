@extends('layouts.layout')

@section('title', 'Models INDEX')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Models</h1>
        <form class="form-inline col-12" action="{{ route('models.index') }}" method="get">
            <label class="text-white-50 mr-2 mb-2" for="name">Search by name:</label>
            <input class="form-control mb-2 mr-2" type="text" name="name" value="{{ $_GET['name'] ?? '' }}"/>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Search" />
        </form>
        <br>
        <form class="form-inline col-12" action="{{ route('models.index') }}" method="get">
            <label class="text-white-50 mr-2 mb-2" for="brand_id">Search by brand:</label>
            <select class="custom-select mb-2 mr-2" name="brand_id">
                @foreach($brands as $brand)
                    @if(isset($_GET['brand_id']))
                        @if($brand->id == $_GET['brand_id'])
                            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                        @else
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endif
                    @else
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endif
                @endforeach
            </select>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Search" />
        </form>
        <hr/>
        <a class="btn btn-dark btn-outline-light m-2" href="{{ route('models.create') }}">Create new</a><br>
        <div class="w-100"></div>
        @if($models->isNotEmpty())
        <div class="m-2">
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
                @foreach ($models as $model)
                    <tr>
                        <td>{{ $model->id }}</td>
                        <td><a class="btn btn-dark" href="{{ route('models.show', ['model' => $model]) }}">{{ $model->name }}</a></td>
                        <td><a class="btn btn-dark" href="{{ route('brands.show', ['brand' => $model->brand]) }}">{{ $model->brand->name }}</a></td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('models.edit', ['model' => $model]) }}">Edit</a>
                            <form action={{ route('models.destroy', ['model' => $model]) }} method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <input type='hidden' name='id' value="{{$model->id}}">
                                <input class="btn btn-danger" type="submit" value="Delete"/>
                            </form>
                            <form action="{{ route('vehicles.index') }}" method="get" style="display: inline-block;">
                                <input type="hidden" name="model_id" value="{{ $model->id }}">
                                <input class="btn btn-info" type="submit" value="Get Vehicles" />
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
