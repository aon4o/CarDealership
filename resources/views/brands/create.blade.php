@extends('layouts.layout')

@section('title', 'Brands CREATE')

@section('content')
    <div class="bg-dark">
        <h1>Brand Create</h1>
        <hr></hr>
        <form action="{{ route('brands.store') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Name" autofocus/>
            @if($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
            <input type="submit" value="Submit"/>
        </form>
    </div>
@endsection


