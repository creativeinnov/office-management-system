<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $employee->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $employee->phone ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Company</label>
    <select name="company_id" class="form-control" required>
        <option value="">Select</option>
        @foreach($companies as $company)
            <option value="{{ $company->id }}"
                {{ old('company_id', $employee->company_id ?? '') == $company->id ? 'selected' : '' }}>
                {{ $company->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Manager</label>
    <select name="manager_id" class="form-control">
        <option value="">None</option>
        @foreach($managers as $mgr)
            <option value="{{ $mgr->id }}"
                {{ old('manager_id', $employee->manager_id ?? '') == $mgr->id ? 'selected' : '' }}>
                {{ $mgr->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Country</label>
    <input type="text" name="country" class="form-control" value="{{ old('country', $employee->country ?? '') }}" required>
</div>

<div class="mb-3">
    <label>State</label>
    <input type="text" name="state" class="form-control" value="{{ old('state', $employee->state ?? '') }}" required>
</div>

<div class="mb-3">
    <label>City</label>
    <input type="text" name="city" class="form-control" value="{{ old('city', $employee->city ?? '') }}" required>
</div>
