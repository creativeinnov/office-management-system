<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index()
    {
        $companyCount = Company::count();
        $employeeCount = Employee::count();

        $topCompanies = Company::withCount('employees')
            ->orderByDesc('employees_count')
            ->take(5)->get();

        $latestEmployees = Employee::with('company', 'manager')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'companyCount',
            'employeeCount',
            'topCompanies',
            'latestEmployees'
        ));
    }
}
