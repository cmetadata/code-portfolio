<?php

namespace App\Http\Controllers;

use App\PatientBill;
use Illuminate\Http\Request;

class PatientBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient-bills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient-bills.create');
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
     * @param  \App\PatientBill  $patientBill
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('patient-bills.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientBill  $patientBill
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('patient-bills.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientBill  $patientBill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientBill $patientBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientBill  $patientBill
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientBill $patientBill)
    {
        //
    }
}
