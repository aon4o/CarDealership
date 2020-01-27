@extends('layouts.layout')

@section('title', 'Customers SHOW')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Customer Show</h1>
        <div class="m-2">
            <table class="table table-hover table-bordered table-striped text-white-50">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Date of Birth</th>
                    <th>EGN</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->born_at }}</td>
                    <td>{{ $customer->egn }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('customers.edit', ['customer' => $customer]) }}">Edit</a>
                        <form style="display: inline-block" action={{ route('customers.destroy', ['customer' => $customer]) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
