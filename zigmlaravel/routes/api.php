<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// RETRIEVE or DISPLAY  all employees in database
Route::get('/zigm',[EmployeeController::class,'getEmployee']);

//get specific employee detail "SELECT"
Route::get('/zigm/{id}',[EmployeeController::class,'getEmployeebyID']);


//Add new employee or new data to database
Route::post('/addzigm',[EmployeeController::class,'addEmployee']);

//UPDATE EMPLOYEE OR DATA FROM DATABASE 
Route::put('/updatezigm/{id}',[EmployeeController::class,'updateEmployee']);

//DELETE DATA OR EMPLOYEE BY SPECIFI ID FROM DATABASE
Route::delete('deletezigm/{id}', [EmployeeController::class,'deleteEmployee']); 

