<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailsController;
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

Route::get('/finances', function() {
    return view('finances');
});

Route::get('/settings', function() {
    return view('settings');
});

Route::post('/appointments/add', [AppointmentController::class, 'store']);

Route::post('/appointments/edit', [AppointmentController::class, 'edit']);

Route::post('/appointments/destroy', [AppointmentController::class, 'destroy']);


