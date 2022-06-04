<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFederalEntityRequest;
use App\Http\Requests\UpdateFederalEntityRequest;
use App\Models\FederalEntity;

class FederalEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFederalEntityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFederalEntityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FederalEntity  $federalEntity
     * @return \Illuminate\Http\Response
     */
    public function show(FederalEntity $federalEntity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FederalEntity  $federalEntity
     * @return \Illuminate\Http\Response
     */
    public function edit(FederalEntity $federalEntity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFederalEntityRequest  $request
     * @param  \App\Models\FederalEntity  $federalEntity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFederalEntityRequest $request, FederalEntity $federalEntity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FederalEntity  $federalEntity
     * @return \Illuminate\Http\Response
     */
    public function destroy(FederalEntity $federalEntity)
    {
        //
    }
}
