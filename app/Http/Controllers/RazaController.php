<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use App\Http\Requests\StoreRazaRequest;
use App\Http\Requests\UpdateRazaRequest;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\StoreRazaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRazaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function show(Raza $raza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function edit(Raza $raza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRazaRequest  $request
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRazaRequest $request, Raza $raza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raza $raza)
    {
        //
    }
}
