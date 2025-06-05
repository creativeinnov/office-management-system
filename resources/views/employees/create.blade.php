@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Employee</h2>

    <form method="POST" action="{{ route('employees.store') }}">
        @csrf
        @include('employees.form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
