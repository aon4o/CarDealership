@extends('layouts.layout')

@section('title', 'Users INDEX')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Users</h1>
        <form class="form-inline col-12" action="{{ route('users.index') }}" method="get">
            <label class="text-white-50 mr-2 mb-2" for="name">Search by name:</label>
            <input class="form-control mb-2 mr-2" id="name" type="text" name="name" placeholder="Name" value="{{ $_GET['name'] ?? '' }}"/>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Search" />
        </form>
        <form class="form-inline col-12" action="{{ route('users.index') }}" method="get">
            <label class="text-white-50 mr-2 mb-2" for="email">Search by email:</label>
            <input class="form-control mb-2 mr-2" id="email" type="text" name="email" placeholder="Email" value="{{ $_GET['email'] ?? '' }}"/>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Search" />
        </form>
        <a class="btn btn-dark btn-outline-light m-2" href="{{ route('users.create') }}">Register new</a><br>
        <div class="w-100"></div>
        @if($users->isNotEmpty())
        <div class="m-2">
            <table class="table table-hover table-bordered table-striped text-white-50">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a class="btn btn-dark" href="{{ route('users.show', ['user' => $user]) }}">{{ $user->name }}</a></td>
                        <td><a class="btn btn-dark" href="{{ route('users.show', ['user' => $user]) }}">{{ $user->email }}</a></td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
                            <form action={{ route('users.destroy', ['user' => $user]) }} method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
            <p>There's nothing to show!</p>
        @endif
    </div>
@endsection

