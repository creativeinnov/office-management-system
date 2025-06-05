@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>✏️ Edit Company</h2>

    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ $company->name }}" required>
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input name="address" class="form-control" value="{{ $company->address }}">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
