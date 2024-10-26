<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\project;
use App\Models\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/employees', [AdminController::class, 'create']);
Route::view('/employee', 'test');
Route::get('/task', [TaskController::class, 'task']);
Route::get('/project', [ProjectController::class, 'project']);


require __DIR__.'/auth.php';
