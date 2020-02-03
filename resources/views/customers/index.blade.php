@extends('layouts.layout')

@section('title', 'Customers INDEX')

@section('content')
    <div class="row m-2">
        <h1 class="col-12">Customers</h1>
        <form class="col-12 form-inline" action="{{ route('customers.index') }}" method="get">
            <div class="form-group col-12">
                <label class="text-white-50 mr-2 mb-2" for="first_name">Search by first name:</label>
                <input class="form-control mb-2 mr-2" id="name" type="text" name="first_name" value="{{ $_GET['first_name'] ?? ''}}"/>
            </div>
            <div class="form-group col-12">
                <label class="text-white-50 mr-2 mb-2" for="last_name">Search by last name:</label>
                <input class="form-control mb-2 mr-2" id="name" type="text" name="last_name" value="{{ $_GET['last_name'] ?? '' }}"/>
            </div>
            <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Search" />
        </form>
        @if(isset($_GET['first_name']))
            <form class="form-inline col-12" action="{{ route('customers.index') }}" method="get">
                <input class="btn btn-dark btn-outline-light mb-2" type="submit" value="Reset search" />
            </form>
        @endif
        <a class="btn btn-dark btn-outline-light m-2" href="{{ route('customers.create') }}">Create new</a><br>
        <div class="w-100"></div>
        @if($customers->isNotEmpty())
            <div class="m-2">
                <table class="table table-hover table-bordered table-striped text-white-50">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td><a class="btn btn-dark" href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->first_name }}</a></td>
                            <td><a class="btn btn-dark" href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->last_name }}</a></td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('customers.edit', ['customer' => $customer]) }}">Edit</a>
                                <form action={{ route('customers.destroy', ['customer' => $customer]) }} method="POST" style="display: inline-block;">
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



