<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFast_foodRequest;
use App\Http\Requests\UpdateFast_foodRequest;
use App\Models\Fast_food;

class FastFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$foods = Fast_food::all();
        return view('index' , compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFast_foodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fast_food $fast_food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fast_food $fast_food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFast_foodRequest $request, Fast_food $fast_food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fast_food $fast_food)
    {
        //
    }
}
