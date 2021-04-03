<?php

namespace App\Http\Controllers;

use App\Physician;
use Illuminate\Http\Request;

class PhysicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('physicians.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('physicians.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('physicians.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('physicians.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Physician $physician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physician $physician)
    {
        //
    }
}
