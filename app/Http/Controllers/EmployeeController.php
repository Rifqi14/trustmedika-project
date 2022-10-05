<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::latest()->paginate(10);
        return view('employee', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'employee_name' => 'required',
            'employee_number' => 'required',
            'employee_gender' => 'required',
            'position' => 'required'
        ]);

        Employee::create([
            'name' => $request->employee_name,
            'employee_number' => $request->employee_number,
            'gender' => $request->employee_gender,
            'position' => $request->position,
            'address' => $request->address
        ]);
        return redirect()->route('employee')->with('success', 'Success added employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('pages.employee.detail', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('pages.employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_name' => 'required',
            'employee_number' => 'required',
            'employee_gender' => 'required',
            'position' => 'required'
        ]);

        $employee = Employee::find($id);
        $employee->employee_number = $request->employee_number;
        $employee->name = $request->employee_name;
        $employee->gender = $request->employee_gender;
        $employee->position = $request->position;
        $employee->address = $request->address;
        $employee->save();
        return redirect()->route('employee')->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Employee $employee)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee')->with('success', 'Employee deleted successfully');
    }
}
