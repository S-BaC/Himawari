<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\Locale;
use Egulias\EmailValidator\Result\Reason\DetailedReason;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// Auth::routes();


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

Route::group(['middleware' => ['auth']], function () {

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
    
    Route::get('/details/edit/{id}', [DetailsController::class, 'edit']);

    Route::post('/details/update/{id}', [DetailsController::class, 'update']);
    
    Route::get('/details/destroy/{id}', [DetailsController::class, 'destroy']);
    
    Route::get('/employees/show/{id}', [EmployeeController::class, 'show']);

    Route::post('/employees/add', [EmployeeController::class, 'store']);
    
    Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit']);
    
    Route::post('/employees/update/{id}', [EmployeeController::class, 'update']);
    
    Route::get('/employees/destroy/{id}', [EmployeeController::class, 'destroy']);

});

Route::get('/lang/{locale}', function ($locale) {

    session(['locale' => $locale]);
    session()->save();

    return redirect('/');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/validate_login', [AuthController::class, 'validate_login'])->name('validate_login');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/validate_registration', [AuthController::class, 'validate_registration'])->name('validate_registration');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



// Route::post('/authLogin', [LoginController::class, 'signin']);
// Route::get('login', [LoginController::class, 'show'])->name('login');
// Route::get('/home', [DashboardController::class, 'index'])->name('home');
