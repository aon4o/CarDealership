@extends('layouts.layout')

@section('title', 'Users EDIT')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">User Edit</h1>
        <form class="form-inline" action={{ route('users.update', ['user' => $user]) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group col-12">
                <label class="mb-2 mr-2" for="name">NEW User name:</label>
                <input class="form-control mb-2" type="text" name="name" value="{{ $user->name }}" autofocus required/>
            </div>
            <div class="form-group col-12">
                <label class="mb-2 mr-2" for="email">NEW Email:</label>
                <input class="form-control mb-2" type="email" name="email" value="{{ $user->email }}" required/>
            </div>
            <div class="form-group col-12">
                <label class="mb-2 mr-2" for="password">NEW Password:</label>
                <input class="form-control mb-2" type="password" name="password" required/>
            </div>
            <div class="form-group col-12">
                <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Submit"/>
            </div>
        </form>
    </div>
@endsection
