<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StockController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/details', [DetailsController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/stock', [StockController::class, 'index']);
Route::get('/messages', [MessagesController::class, 'index']);
Route::get('/finances', [FinancesController::class, 'index']);


Route::get('/settings', function() {
});

Route::post('/details/add', [DetailsController::class, 'store']);

Route::post('/details/edit', [DetailsController::class, 'edit']);

Route::post('/details/destroy', [DetailsController::class, 'destroy']);

Route::post('/employees/add', [EmployeeController::class, 'store']);

Route::post('/employees/edit', [EmployeeController::class, 'edit']);

Route::post('/employees/destroy', [EmployeeController::class, 'destroy']);


