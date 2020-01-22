@extends('layouts.layout')

@section('title', 'Models SHOW')

@section('content')
    <div>
        <h1>Model Show</h1>
        <hr/>
        <table>
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
                <td><a href="{{ route('brands.show', ['brand' => $model->brand]) }}">{{ $model->brand->name }}</a></td>
                <td><a href="{{ route('models.edit', ['model' => $model]) }}">Edit</a></td>
                <td><form action={{ route('models.destroy', ['model' => $model]) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <input type='hidden' name='id' value="{{$model->id}}">
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
                <td>
                    <form action="{{ route('vehicles.index') }}" method="get">
                        <input type="hidden" name="search1" value="true" />
                        <input type="hidden" name="model_id" value="{{ $model->id }}">
                        <input type="submit" value="Get Vehicles" />
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
