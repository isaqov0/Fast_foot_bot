<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryiesRequest;
use App\Http\Requests\UpdateCategoryiesRequest;
use App\Models\Categories;

class CategoryiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCategoryiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categoryies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categoryies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryiesRequest $request, Categories $categoryies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categoryies)
    {
        //
    }
}
