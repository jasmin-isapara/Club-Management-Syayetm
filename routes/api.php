<?php

use App\Http\Controllers\API\EmployeeAPIController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/employees', [EmployeeAPIController::class, 'getEmployees']);

Route::resource('employees', EmployeeAPIController::class)->except('search');
Route::get('search/{name}', [EmployeeAPIController::class, 'search']);
