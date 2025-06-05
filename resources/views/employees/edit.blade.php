@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Employee</h2>

    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
        @csrf @method('PUT')
        @include('employees.form', ['employee' => $employee])
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
