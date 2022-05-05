<?php

namespace App\Http\Controllers;

use App\Models\Givenumber;
use App\Http\Requests\StoreGivenumberRequest;
use App\Http\Requests\UpdateGivenumberRequest;

class GivenumberController extends Controller
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
     * @param  \App\Http\Requests\StoreGivenumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGivenumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function show(Givenumber $givenumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function edit(Givenumber $givenumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGivenumberRequest  $request
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGivenumberRequest $request, Givenumber $givenumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Givenumber $givenumber)
    {
        //
    }
}
