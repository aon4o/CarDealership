<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Model;
use App\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search1'))
            $vehicles = Vehicle::where('model_id', '=', $request->model_id)->get();
        else
            $vehicles = Vehicle::all();

        $models = Model::all();
        $brands = Brand::all();
        return view('vehicles.index', ['vehicles'=>$vehicles, 'models' => $models, 'brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = Model::all();
        return view('vehicles.create', ['models' => $models]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vehicle::Create($request->validate([
            'model_id' => 'required',
            'engine_volume' => 'required',
            'horse_power' => 'required',
            'color' => 'required',
            'year_made' => 'required',
            'reg_num' => 'required'
        ]));

        return redirect(route('vehicles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', ['vehicle' => $vehicle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $models = Model::all();
        return view('vehicles.edit', ['vehicle' => $vehicle, 'models' => $models]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->validate([
            'model_id' => 'required',
            'engine_volume' => 'required',
            'horse_power' => 'required',
            'color' => 'required',
            'year_made' => 'required',
            'reg_num' => 'required'
        ]));
        return redirect(route('vehicles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect(route('vehicles.index'));
    }
}
