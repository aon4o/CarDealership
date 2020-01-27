@extends('layouts.layout')

@section('title', 'Brands EDIT')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Brand Edit</h1>
        <form class="form-inline col-12" action={{ route('brands.update', ['brand' => $brand]) }} method="POST">
            @csrf
            @method('PUT')
            <input type='hidden' name='id' value="{{$brand->id}}">
            <label class="mb-2 mr-2" for="name">NEW Brand name:</label>
            <input class="form-control mb-2 mr-2" type="text" name="name" value="{{ $brand->name }}" autofocus required/><br>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Submit"/>
        </form>
    </div>
@endsection
