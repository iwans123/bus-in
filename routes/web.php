<?php

use App\Http\Controllers\DashboardVehicleController;
use App\Http\Controllers\KeberangkatanController;
use App\Http\Controllers\Kedatangan2Controller;
use App\Http\Controllers\KedatanganController;
use App\Http\Controllers\SecondVerifikasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifikasiController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard/vehicles', [App\Http\Controllers\DashboardVehicleController::class, 'index']);

// Route::resource('/dashboard/vehicles', DashboardVehicleController::class);
// Route::get('/dashboard/downloadpdf', [DashboardVehicleController::class, 'downloadPDF']);

// Route::resource('/dashboard/verifikasis', VerifikasiController::class);

// Route::resource('/dashboard/secondVerifikasis', SecondVerifikasiController::class);

// Route::resource('/dashboard/kedatangan', KedatanganController::class);
// Route::get('/dashboard/kedatanganadd/{id}', [KedatanganController::class, 'add']);

// Route::resource('/dashboard/keberangkatan', KeberangkatanController::class);
// Route::get('/dashboard/keberangkatanadd/{id}', [KeberangkatanController::class, 'add']);

// Route::resource('/dashboard/user', UserController::class);

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:1'], function() {
        Route::resource('/dashboard/user', UserController::class);
    });
    Route::group(['middleware' => ['role:1,2']], function() {
        Route::resource('/dashboard/vehicles', DashboardVehicleController::class);
        Route::resource('/dashboard/verifikasis', VerifikasiController::class);
    });
    Route::group(['middleware' => 'role:1,3'], function() {
        Route::resource('/dashboard/secondVerifikasis', SecondVerifikasiController::class);
    });
    Route::group(['middleware' => 'role:1,4'], function() {
        Route::resource('/dashboard/kedatangan', KedatanganController::class);
        Route::get('/dashboard/kedatanganadd/{id}', [KedatanganController::class, 'add']);
        Route::resource('/dashboard/keberangkatan', KeberangkatanController::class);
        Route::get('/dashboard/keberangkatanadd/{id}', [KeberangkatanController::class, 'add']);
    });
});
