<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'company_id', 'manager_id', 'country', 'state', 'city'
    ];

    // Employee belongs to a Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Employee may have a Manager (self-referencing)
    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    // Employee may manage other Employees
    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'manager_id');
    }
}
