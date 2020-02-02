@extends('layouts.layout')

@section('title', 'Users REGISTER')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">User Register</h1>
        <form class="form-inline" action={{ route('register') }} method="POST">
            @csrf
            <div class="form-group col-12">
                <label class="mb-2 mr-2" for="name">User name:</label>
                <input class="form-control mb-2" type="text" name="name" autofocus required/>
            </div>
            <div class="form-group col-12">
                <label class="mb-2 mr-2" for="email">Email:</label>
                <input class="form-control mb-2" type="email" name="email" required/>
            </div>
            <div class="form-group col-12">
                <label class="mb-2 mr-2" for="password">Password:</label>
                <input class="form-control mb-2" type="password" name="password" required/>
            </div>
            <div class="form-group col-12">
                <label class="mb-2 mr-2" for="password_confirm">Confirm password:</label>
                <input class="form-control mb-2" type="password" name="password_confirmation" required/>
            </div>
            <div class="form-group col-12">
                <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Submit"/>
            </div>
        </form>
    </div>
@endsection


