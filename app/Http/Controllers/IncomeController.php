<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\MonthlyContribution;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $startDate =  Carbon::now()->startOfMonth();
        $endDate =  Carbon::now()->endOfMonth();

        // $pending = Employee::where('employees.status', '1')
        //             ->where("monthly_contributions.month", ">=", $startDate)
        //             ->where("monthly_contributions.month", "<=", $endDate)
        //             ->join('monthly_contributions', 'monthly_contributions.employee_id', '!=', 'employees.id')
                    // ->where('monthly_contributions.deleted_at','!=', null)
                    // ->get();

        // $pending = MonthlyContribution::withTrashed()->where('status', '0')->get();;

        // dd($pending);

        // $completed = Employee::where('employees.status', '1')
        //             ->where("monthly_contributions.month", ">=", $startDate)
        //             ->where("monthly_contributions.month", "<=", $endDate)
        //             ->join('monthly_contributions', 'monthly_contributions.employee_id', '=', 'employees.id')
        //             ->get();

        // $completed = MonthlyContribution::where("monthly_contributions.month", ">=", $startDate)
        //             ->where("monthly_contributions.month", "<=", $endDate)
        //             ->where('monthly_contributions.deleted_at', null)
        //             ->join('employees', 'employees.id', '=', 'monthly_contributions.employee_id')
        //             ->get();

        // $history = MonthlyContribution::withTrashed()->with('employee')->orderBy('employee_id', 'ASC')->get();
        // dd($history);

        return Inertia::render('Contributions/Index', [
            // 'pendingContributions' => $pending,
        ]);
    }

    public function completeContribution() {
        $startDate =  Carbon::now()->startOfMonth();
        $endDate =  Carbon::now()->endOfMonth();

        $completed = MonthlyContribution::where("monthly_contributions.month", ">=", $startDate)
                    ->where("monthly_contributions.month", "<=", $endDate)
                    ->where('monthly_contributions.deleted_at', null)
                    ->join('employees', 'employees.id', '=', 'monthly_contributions.employee_id')
                    ->get();

        return Inertia::render('Contributions/Completed', [
            'completedContributions' => $completed,
        ]);
    }

    public function pendingContribution(Employee $employee, MonthlyContribution $contribution) {
        $startDate =  Carbon::now()->startOfMonth();
        $endDate =  Carbon::now()->endOfMonth();

        // $pending = $employee
        //             ->join('monthly_contributions', 'employees.id', '!=', 'monthly_contributions.employee_id')
        //             ->where('monthly_contributions.month', '>=', $startDate)
        //             ->where('monthly_contributions.month', '<=', $endDate)
        //             ->get();

        $completed = MonthlyContribution::where("monthly_contributions.month", ">=", $startDate)
                    ->where("monthly_contributions.month", "<=", $endDate)
                    ->where('monthly_contributions.deleted_at', null)
                    ->join('employees', 'employees.id', '=', 'monthly_contributions.employee_id')
                    ->pluck('employees.id');
// dd($completed->toArray());
        $pending = $employee->whereNotIn('id', $completed)->get();

        return Inertia::render('Contributions/Pending', [
            'pendingContributions'=>$pending,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $contribution
     * @return \Illuminate\Http\Response
     */
    public function show(MonthlyContribution $contribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonthlyContribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function edit(MonthlyContribution $contribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $contribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MonthlyContribution $contribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $contribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonthlyContribution $contribution)
    {
        //
    }
}
