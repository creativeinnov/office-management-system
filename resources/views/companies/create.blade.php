@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>➕ Add Company</h2>

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input name="address" class="form-control">
        </div>
        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection
