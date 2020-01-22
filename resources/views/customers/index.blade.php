@extends('layouts.layout')

@section('title', 'Customers INDEX')

@section('content')
    <div>
        <h1>Customers</h1>
        <form action="{{ route('customers.index') }}" method="get">
            <input type="hidden" name="search" value="true" />
            Search by first name: <input type="text" name="first_name" value="{{ $_GET['first_name'] ?? ''}}"/>
            Search by last name: <input type="text" name="last_name" value="{{ $_GET['last_name'] ?? '' }}"/>
            <input type="submit" value="Search" />
        </form>
        <!--todo remake the search method-->
        <hr/>
        <a href="{{ route('customers.create') }}">Create new</a><br>
        @if($customers->isNotEmpty())
            <table>
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
                        <td><a href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->first_name }}</a></td>
                        <td><a href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->last_name }}</a></td>
                        <td><a href="{{ route('customers.edit', ['customer' => $customer]) }}">Edit</a></td>
                        <td><form action={{ route('customers.destroy', ['customer' => $customer]) }} method="POST">
                                @csrf
                                @method('DELETE')
                                <input type='hidden' name='id' value="{{$customer->id}}">
                                <input type="submit" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There's nothing to show!</p>
        @endif
    </div>
@endsection



