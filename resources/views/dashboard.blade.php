@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>📊 Office Management Dashboard</h2>

    <div class="row my-4">
        <div class="col">
            <div class="card bg-primary text-white p-3">
                <h5>Total Companies</h5>
                <h2>{{ $companyCount }}</h2>
            </div>
        </div>
        <div class="col">
            <div class="card bg-success text-white p-3">
                <h5>Total Employees</h5>
                <h2>{{ $employeeCount }}</h2>
            </div>
        </div>
    </div>

    <h4>🏢 Top 5 Companies (by employee count)</h4>
    <ul class="list-group mb-4">
        @foreach($topCompanies as $company)
            <li class="list-group-item">
                {{ $company->name }} — {{ $company->employees_count }} employees
            </li>
        @endforeach
    </ul>

    <h4>👥 Latest 5 Employees</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Manager</th>
            </tr>
        </thead>
        <tbody>
            @foreach($latestEmployees as $emp)
                <tr>
                    <td>{{ $emp->name }}</td>
                    <td>{{ $emp->company->name ?? '—' }}</td>
                    <td>{{ $emp->manager->name ?? 'None' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('companies.index') }}" class="btn btn-outline-primary">Manage Companies</a>
    <a href="{{ route('employees.index') }}" class="btn btn-outline-success">Manage Employees</a>
</div>
@endsection
