<?php

namespace App\Http\Controllers;

use App\Customer;
use DateTime;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search1'))
            $customers = Customer::where('first_name', 'like', $request->name . '%')->get();
        elseif($request->has('search2'))
            $customers = Customer::where('last_name', 'like', $request->name . '%')->get();
        else
            $customers = Customer::all();

        //todo reworc the search method

        return view('customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = new DateTime(date("Y-m-d"));
        $date->modify('-1 year');

        return view('customers.create',['date'=>$date]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::Create($request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'born_at' => 'required',
            'egn' => 'required'
        ]));
        return view('customers.show', ['customer'=>$customer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', ['customer'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'born_at' => 'required',
            'egn' => 'required'
        ]));
        return view('customers.show', ['customer' => $customer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customers.index'));
    }
}
