<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocketRequest;
use App\Http\Requests\UpdateDocketRequest;
use Illuminate\Http\Request;

use App\Models\Docket;


class DocketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dockets = Docket::all();
        return view("Docket.viewDockets", ['dockets'=>$dockets]);
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
    public function store(Request $request)
    {
        /**
         * 
         * NOTE TO BILLS
         * 
         * Read the docs on validation and Eloquent ORM
         */
        $validated = $request->validate([
            'subject' => 'required',
            'occurrence' => 'required',
        ]);
     
        $input =  $request->only(['subject', 'occurrence']);
        $docket = Docket::create($input);

        return redirect()->route('docket.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
