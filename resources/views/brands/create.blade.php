@extends('layouts.layout')

@section('title', 'Brands CREATE')

@section('content')
    <div class="m-2">
    <h1>Brand Create</h1>
    <form class="form-inline" action="{{ route('brands.store') }}" method="post">
        <div class="form-group">
            @csrf
            <input class="form-control mr-2 mb-2" type="text" name="name" placeholder="Name" autofocus/>
            @if($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Submit"/>
        </div>
    </form>
    </div>
@endsection


