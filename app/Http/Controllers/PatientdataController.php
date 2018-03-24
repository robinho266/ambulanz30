<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests\StorePatientdata;

use App\Patientdata;

class PatientdataController extends Controller
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
        if (Auth::user()->patientdata()->first() !== null) {
            return redirect('patientdata/edit');
        }

        return view('patientdata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientdata $request)
    {
        $input = $request->all();

        $patientdata = Auth::user()->patientdata()->create($input);

        return redirect('patientdata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $patientdata = Auth::user()->patientdata()->first();

        return view('patientdata.show')->with([
            'patientdata' => $patientdata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $patientdata = Auth::user()->patientdata()->first();

        if ($patientdata === null) {
            return redirect('patientdata/create');
        }

        return view('patientdata.edit')->with([
            'patientdata' => $patientdata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePatientdata $request)
    {
        $input = $request->all();

        $patientdata = Auth::user()->patientdata()->first();

        $patientdata->update($input);

        return redirect('patientdata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
