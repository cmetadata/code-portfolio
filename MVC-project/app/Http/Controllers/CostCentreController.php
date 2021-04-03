<?php

namespace App\Http\Controllers;

use App\CostCentre;
use Illuminate\Http\Request;

class CostCentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cost-centres.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cost-centres.create');
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
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('cost-centres.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('cost-centres.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CostCentre $costCentre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function destroy(CostCentre $costCentre)
    {
        //
    }
}
