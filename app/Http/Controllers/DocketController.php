<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocketRequest;
use App\Http\Requests\UpdateDocketRequest;
use App\Models\Docket;

class DocketController extends Controller
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
        return view('Docket.createDocket');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Docket $docket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docket $docket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocketRequest $request, Docket $docket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docket $docket)
    {
        //
    }
}
