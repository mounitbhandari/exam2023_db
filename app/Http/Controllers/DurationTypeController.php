<?php

namespace App\Http\Controllers;

use App\Models\DurationType;
use App\Http\Requests\StoreDurationTypeRequest;
use App\Http\Requests\UpdateDurationTypeRequest;

class DurationTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreDurationTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDurationTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function show(DurationType $durationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function edit(DurationType $durationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDurationTypeRequest  $request
     * @param  \App\Models\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDurationTypeRequest $request, DurationType $durationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DurationType $durationType)
    {
        //
    }
}
