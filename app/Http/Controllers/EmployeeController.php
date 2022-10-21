<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Employees/Index', [
            'employees' => fn () => Employee::withTrashed()->orderby('status', 'DESC')->orderBy('employee_id', 'ASC')->get()
        ]);
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
        // $validate = Validator::make($request->all(), [
        //     'employeeId' => 'required | numeric | unique:employees',
        //     'firstName' => 'required | string |min:3',
        //     'lastName' => 'required | string |min:3',
        //     'email' => 'required | email | ',
        //     'mobile',
        //     'gender'
        // ]);

        $employee = new Employee();
        $employee->employee_id = $request->employeeId;
        $employee->first_name = $request->firstName;
        $employee->last_name = $request->lastName;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->gender = $request->gender;
        $employee->save();

        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::withTrashed()->find($id);

        return Inertia::render('Employees/Show', [
            'employees' => $employee,
        ]);

        // return response()->json([
        //     'success' => true,
        //     'data' => $employee
        // ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
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
        $employee = Employee::find($id);
        $employee->employee_id = $request->employeeId;
        $employee->first_name = $request->firstName;
        $employee->last_name = $request->lastName;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->gender = $request->gender;
        $employee->save();

        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        // for change employee status
        $employee->status = 0;
        $employee->save();
        $employee->delete();

        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }
}
