<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinics = Clinic::latest()->paginate(10);
        return view('pages.clinic.index', compact('clinics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.clinic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'clinic_code' => 'required',
            'clinic_name' => 'required'
        ]);

        Clinic::create([
            'code' => $request->clinic_code,
            'name' => $request->clinic_name,
            'address' => $request->address
        ]);
        return redirect()->route('clinic')->with('success', 'Success added clinic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clinic  $clinics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinic = Clinic::find($id);
        return view('pages.clinic.detail', compact('clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clinic  $clinics
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinic = Clinic::find($id);
        return view('pages.clinic.edit', compact('clinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clinic  $clinics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'clinic_code' => 'required',
            'clinic_name' => 'required'
        ]);

        $clinic = Clinic::find($id);
        $clinic->code = $request->clinic_code;
        $clinic->name = $request->clinic_name;
        $clinic->address = $request->address;
        $clinic->save();
        return redirect()->route('clinic')->with('success', 'Clinic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clinic  $clinics
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clinic = Clinic::find($id);
        $clinic->delete();

        return redirect()->route('clinic')->with('success', 'Clinic deleted successfully');
    }
}
