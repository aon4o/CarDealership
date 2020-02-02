@extends('layouts.layout')

@section('title', 'Users SHOW')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">User SHOW</h1>
        <div class="m-2">
            <table class="table table-hover table-bordered table-striped text-white-50">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>email_verified_at</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
                        <form action={{ route('users.destroy', ['user' => $user]) }} method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <input type='hidden' name='id' value="{{$user->id}}">
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
