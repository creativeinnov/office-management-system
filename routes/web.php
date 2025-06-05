<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return redirect()->route('dashboard');
});

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

use App\Http\Controllers\CompanyController;

Route::resource('companies', CompanyController::class);

use App\Http\Controllers\EmployeeController;

Route::resource('employees', EmployeeController::class);

use App\Http\Controllers\LocationController;

Route::get('/api/countries', [LocationController::class, 'getCountries']);
Route::post('/api/states', [LocationController::class, 'getStates']);
Route::post('/api/cities', [LocationController::class, 'getCities']);


