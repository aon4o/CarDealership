<?php

namespace App\Http\Controllers;

use App\Customer;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $customers = Customer::where([
                ['first_name', 'like', $request->first_name . '%'],
                ['last_name', 'like', $request->last_name . '%']
            ])->get();
        }
        else {
            $customers = Customer::all();
        }

        //todo rework the search method

        return view('customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
     * @param Request $request
     * @return Response
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
     * @param Customer $customer
     * @return Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', ['customer'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Customer $customer
     * @return Response
     */
    public function edit(Customer $customer)
    {
        $date = new DateTime(date("Y-m-d"));
        $date->modify('-1 year');

        return view('customers.edit', ['customer'=>$customer, 'date' => $date]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Customer $customer
     * @return Response
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
     * @param Customer $customer
     * @return Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customers.index'));
    }
}
