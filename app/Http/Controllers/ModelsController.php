<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Model;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('name'))
            $models = Model::where('name', 'like', $request->name . '%')->get();
        elseif($request->has('brand_id'))
            $models = Model::where('brand_id', '=', $request->brand_id)->get();
        else
            $models = Model::all();

        //todo rework the search method

        $brands = Brand::all();
        return view('models.index', ['models'=>$models, 'brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('models.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Model::Create($request->validate([
            'name' => 'required',
            'brand_id' => 'required'
        ]));

        return redirect(route('models.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Model $model
     * @return \Illuminate\Http\Response
     */
    public function show(Model $model)
    {
        return view('models.show', ['model' => $model] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Model $model
     * @return \Illuminate\Http\Response
     */
    public function edit(Model $model)
    {
        $brands = Brand::all();
        return view('models.edit', ['brands'=>$brands, 'model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Model $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model $model)
    {
        $model->update($request->validate([
            'name'=>'required',
            'brand_id'=>'required'
        ]));
        return redirect(route('models.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Model $model
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Model $model)
    {
        $model->delete();
        return redirect(route('models.index'));
    }
}
