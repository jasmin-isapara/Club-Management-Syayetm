<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IncomeController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('/login');
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('employee', EmployeeController::class);
Route::group(['prefix'=>'incomes',"as" => 'incomes.'],function(){
    Route::get('/', [IncomeController::class, 'index'])->name('index');
    Route::get('/complete_contribution', [IncomeController::class, 'completeContribution'])->name('complete');
    Route::get('/pending_contribution', [IncomeController::class, 'pendingContribution'])->name('pending');
});

Route::get('/demo', [DemoController::class, 'index'])->name('demo');

Route::view('demo1', 'demo1');
require __DIR__ . '/auth.php';
