@extends('layouts.layout')

@section('title', 'Models EDIT')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Model Edit</h1>
        <form action={{ route('models.update', ['model' => $model]) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="mb-2 mr-2" >Model name:</label>
                <input class="form-control" type="text" name="name" value="{{ $model->name }}"/>
            </div>
            <div class="form-group">
                <label class="mr-2" for="brand_id">Model brand:</label>
                <select class="custom-select" name="brand_id">
                    @foreach($brands as $brand)
                        @if($brand->id == $model->brand_id)
                            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                        @else
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Submit"/>
        </form>
    </div>
@endsection
