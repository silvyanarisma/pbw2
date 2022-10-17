<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('employee', [EmployeeController::class, "index"])->name('employee.index')->middleware('auth');
// Route::get('employee/create', [EmployeeController::class, "create"])->name('employee.create')->middleware('auth');
Route::post('employee', [EmployeeController::class, "store"])->name('employee.store')->middleware('auth');
// Route::get('employee/{id}/edit', [EmployeeController::class, "edit"])->name('employee.edit')->middleware('auth');
Route::post('employee/{id}/edit', [EmployeeController::class, "edit"])->name('employee.edit')->middleware('auth');
Route::get('employee/{id}/delete', [EmployeeController::class, "destroy"])->name('employee.destroy')->middleware('auth');
Route::get('employee/datatable', [EmployeeController::class, "datatable"])->name('employee.datatable');

require __DIR__.'/auth.php';
