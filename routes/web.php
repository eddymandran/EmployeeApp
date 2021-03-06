<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/get/employee/list', [EmployeesController::class , 'getEmployeeList'])->name('employee.list');

Route::post('/get/individual/employee/details', [EmployeesController::class , 'getEmployeeDetails'])->name('employee.details');

Route::post('/update/employee/data', [EmployeesController::class , 'updateEmployeeData']);

Route::post('/store/employee/data', [EmployeesController::class , 'store']);

Route::delete('/delete/employee/data/{employee}', [EmployeesController::class , 'destroy']);