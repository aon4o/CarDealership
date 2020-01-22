@extends('layouts.layout')

@section('title', 'Brands EDIT')

@section('content')
    <div>
        <h1>Brand Edit</h1>
        <hr>
        <form action={{ route('brands.update', ['brand' => $brand]) }} method="POST">
            @csrf
            @method('PUT')
            <input type='hidden' name='id' value="{{$brand->id}}">
            NEW Brand name: <input type="text" name="name" value="{{ $brand->name }}" autofocus required/></br>
            <input type="submit" value="Submit"/>
        </form>
    </div>
@endsection
