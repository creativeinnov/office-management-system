@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Employees</h2>
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">+ Add Employee</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table id="employees-table" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Manager</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $emp)
                <tr>
                    <td>{{ $emp->name }}</td>
                    <td>{{ $emp->email }}</td>
                    <td>{{ $emp->phone }}</td>
                    <td>{{ $emp->company->name ?? 'N/A' }}</td>
                    <td>{{ $emp->manager->name ?? 'None' }}</td>
                    <td>{{ $emp->position ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $emp->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('employees.destroy', $emp->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script>
$(document).ready(function() {
    // Add a select filter for company above the table
    $('#employees-table thead tr').clone(true).appendTo('#employees-table thead');
    $('#employees-table thead tr:eq(1) th').each(function (i) {
        if (i === 3) { // Company column index
            $(this).html('<select id="company-filter"><option value="">All Companies</option></select>');
        } else {
            $(this).html('');
        }
    });

    var table = $('#employees-table').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        pageLength: 10
    });

    // Populate company filter dropdown dynamically from the companies list (pass $companies from controller)
    @json($companies).forEach(company => {
        $('#company-filter').append('<option value="'+company.name+'">'+company.name+'</option>');
    });

    // Filter by company on dropdown change
    $('#company-filter').on('change', function () {
        table.column(3).search(this.value).draw();
    });
});
</script>
@endsection
