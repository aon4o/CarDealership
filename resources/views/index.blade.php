@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    @guest
        <p>Hello.</p>
        <p>To access this page you've got to be logged in!</p>
        <a class="btn btn-dark btn-outline-light" href="{{ route('login') }}">LogIn</a>
    @endguest
    @auth
        <p>Hello, {{ Auth::user()->name }}</p>
    @endauth
@endsection
