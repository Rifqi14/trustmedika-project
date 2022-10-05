<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Employee;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::with(['employee', 'clinic'])->latest()->paginate(10);
        return view('pages.schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $clinics = Clinic::all();
        return view('pages.schedule.create', compact('employees', 'clinics'));
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
            'employee_id' => 'required',
            'clinic_id' => 'required',
            'day' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        Schedule::create([
            'employee_id' => $request->employee_id,
            'clinic_id' => $request->clinic_id,
            'day' => $request->day,
            'start' => $request->start,
            'end' => $request->end
        ]);
        return redirect()->route('schedule')->with('success', 'Success added schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::find($id);
        $employees = Employee::all();
        $clinics = Clinic::all();
        return view('pages.schedule.detail', compact('schedule', 'employees', 'clinics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $employees = Employee::all();
        $clinics = Clinic::all();
        return view('pages.schedule.edit', compact('schedule', 'employees', 'clinics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_id' => 'required',
            'clinic_id' => 'required',
            'day' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $schedule = Schedule::find($id);
        $schedule->employee_id = $request->employee_id;
        $schedule->clinic_id = $request->clinic_id;
        $schedule->day = $request->day;
        $schedule->start = $request->start;
        $schedule->end = $request->end;
        $schedule->save();
        return redirect()->route('schedule')->with('success', 'Schedule update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();

        return redirect()->route('schedule')->with('success', 'Schedule deleted successfully');
    }
}
