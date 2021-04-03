<?php

namespace App\Http\Controllers;

use App\HaiReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('haiReport.index');
    }

    /**
     * Show the form for creating a new HAI report.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('haiReport.create');
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
        return view('haiReport.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CostCentre  $costCentre
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('haiReport.edit');
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
