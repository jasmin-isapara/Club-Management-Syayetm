<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeAPIController extends Controller
{
    public function getEmployees()
    {
        $employee = Employee::get();
        return response()->json([
            'success' => true,
            'data' => $employee
        ], Response::HTTP_OK);
    }
}
