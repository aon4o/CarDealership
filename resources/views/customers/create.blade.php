@extends('layouts.layout')

@section('title', 'Customers CREATE')

@section('content')
    <div>
        <h1>Customer Create</h1><hr/>
        <form action="{{ route('customers.store') }}" method="post">
            @csrf
            First name: <input type="text" name="first_name" placeholder="First name" required autofocus/><br><br>
            Last name: <input type="text" name="last_name" placeholder="Last name" required/><br><br>
            Date of birth: <input type="date" name="born_at" max="{{ $date->format("Y-m-d") }}" required/><br><br>
            EGN: <input type="number" name="egn" placeholder="0000000000" size="10" required/><br><br>
            <input type="submit" value="Submit"/>
        </form>
    </div>
@endsection



