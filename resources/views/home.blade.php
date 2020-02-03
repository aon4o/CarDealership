@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    @guest
        <p class="mt-2">Hello!</p>
        <p>To access this page you've got to be logged in!</p>
        <a class="btn btn-dark btn-outline-light mb-2" href="{{ route('login') }}">LogIn</a>
    @endguest
    @auth
        <p class="mt-2">Hello, {{ Auth::user()->name }}!</p>
        <p>You can now access all the pages, create, edit and delete!</p>
    @endauth
@endsection
