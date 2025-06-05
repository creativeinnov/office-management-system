<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
         $employees = Employee::with(['company', 'manager'])->get();
        $companies = Company::all();
        return view('employees.index', compact('employees', 'companies'));
    }

    public function create()
    {
        // Fetch countries from REST Countries API (no auth)
        $response = Http::get('https://restcountries.com/v3.1/all');
        $countries = collect($response->json())->sortBy('name.common')->pluck('name.common');

        $companies = Company::all();
        $managers = Employee::all();

        return view('employees.create', compact('companies', 'managers', 'countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required|string|max:20',
            'company_id' => 'required|exists:companies,id',
            'manager_id' => 'nullable|exists:employees,id',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        // Fetch countries from REST Countries API (no auth)
        $response = Http::get('https://restcountries.com/v3.1/all');
        $countries = collect($response->json())->sortBy('name.common')->pluck('name.common');

        $companies = Company::all();
        $managers = Employee::all();

        return view('employees.create', compact('companies', 'managers', 'countries'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:employees,email,{$employee->id}",
            'phone' => 'required|string|max:20',
            'company_id' => 'required|exists:companies,id',
            'manager_id' => 'nullable|exists:employees,id',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
