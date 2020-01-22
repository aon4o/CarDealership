@extends('layouts.layout')

@section('title', 'Models CREATE')

@section('content')
    <div>
        <h1>Model Create</h1>
        <hr/>
        <form action="{{ route('models.store') }}" method="post">
            @csrf
            Model's name:
            <input type="text" name="name" placeholder="Name" required/>
            @if($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
            <br>
            Model's brand:
            <select name="brand_id" required>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="Submit"/>
        </form>
    </div>
@endsection
