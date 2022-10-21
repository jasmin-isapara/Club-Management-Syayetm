<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeAPIController extends Controller
{
    public function index()
    {
        $employee = Employee::withTrashed()->orderBy('created_at', 'DESC')->get();

        return response()->json([
            'success' => true,
            'data' => $employee
        ], Response::HTTP_OK);
    }

    public function update(Request $request, $id) {
        $employee = Employee::withTrashed()->find($id);
        $employee->status = $request->status;
        $employee->deleted_at = $request->deleted_at;
        $employee->save();

        return response()->json([
            'success' => true,
            'data' => $employee
        ], Response::HTTP_OK);
    }

    public function search($name) {
        $employee = Employee::withTrashed()->where('first_name', 'like', '%'.$name.'%')->get();
        return response()->json([
            'success'=>true,
            'data'=>$employee
        ], Response::HTTP_OK);
    }
}
