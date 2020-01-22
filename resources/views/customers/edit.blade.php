@extends('layouts.layout')

@section('title', 'Customers EDIT')

@section('content')
    <div>
        <h1>Customer Edit</h1>
        <hr>
        <form action={{ route('customers.update', ['customer' => $customer]) }} method="POST">
            @csrf
            @method('PUT')
            First name: <input type="text" name="first_name" placeholder="First name" value="{{ $customer->first_name }}" required/><br><br>
            Last name: <input type="text" name="last_name" placeholder="Last name" value="{{ $customer->last_name }}" required/><br><br>
            Date of birth: <input type="date" name="born_at" max="{{ $date->format("Y-m-d") }}" value="{{ $customer->born_at }}" required/><br><br>
            EGN: <input type="number" name="egn" placeholder="0000000000" size="10" value="{{ $customer->egn }}" required/><br><br>
            <input type="submit" value="Submit"/>
        </form>
    </div>
@endsection
