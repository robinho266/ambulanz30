<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests\StoreAnamnesis;
use App\Anamnesis;

class AnamnesisController extends Controller
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
        if (Auth::user()->anamnesis()->first() !== null) {
            return redirect('anamnesis/edit');
        }

        return view('anamnesis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnamnesis $request)
    {
        $input = $request->all();

        $anamnesis = Auth::user()->anamnesis()->create($input);

        return redirect('anamnesis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $anamnesis = Auth::user()->anamnesis()->first();

        return view('anamnesis.show')->with([
            'anamnesis' => $anamnesis
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $anamnesis = Auth::user()->anamnesis()->first();

        if ($anamnesis === null) {
            return redirect('anamnesis/create');
        }

        return view('anamnesis.edit')->with([
            'anamnesis' => $anamnesis
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAnamnesis $request)
    {
        $input = $request->all();

        $anamnesis = Auth::user()->anamnesis()->first();

        $anamnesis->update($input);

        return redirect('anamnesis');
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



