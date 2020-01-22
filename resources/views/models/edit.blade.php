@extends('layouts.layout')

@section('title', 'Models EDIT')

@section('content')
    <div>
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
    </div>
@endsection
