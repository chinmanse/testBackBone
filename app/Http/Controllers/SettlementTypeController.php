<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettlementTypeRequest;
use App\Http\Requests\UpdateSettlementTypeRequest;
use App\Models\SettlementType;

class SettlementTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreSettlementTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettlementTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SettlementType  $settlementType
     * @return \Illuminate\Http\Response
     */
    public function show(SettlementType $settlementType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SettlementType  $settlementType
     * @return \Illuminate\Http\Response
     */
    public function edit(SettlementType $settlementType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettlementTypeRequest  $request
     * @param  \App\Models\SettlementType  $settlementType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettlementTypeRequest $request, SettlementType $settlementType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SettlementType  $settlementType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SettlementType $settlementType)
    {
        //
    }
}
