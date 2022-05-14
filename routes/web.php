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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::group(['middleware' => ['auth','role:admin']], function() {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home/ramcheck', [App\Http\Controllers\HomeController::class, 'export']);
    Route::get('/dashboard/vehicles/downloadpdf/{id}', [DashboardVehicleController::class, 'downloadPDF']);
    Route::resource('/dashboard/user', UserController::class);
    Route::get('/dashboard/kedatangan/exportexcel', [KedatanganController::class, 'export']);
    Route::get('/dashboard/keberangkatan/exportexcel', [KeberangkatanController::class, 'export']);
});
Route::group(['middleware' => ['auth','role:ppns|admin']], function() {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/dashboard/vehicles', DashboardVehicleController::class);
    Route::resource('/dashboard/verifikasis', VerifikasiController::class);
});
Route::group(['middleware' => ['auth','role:penguji|admin']], function() {
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/dashboard/secondVerifikasis', SecondVerifikasiController::class);
});
Route::group(['middleware' => ['auth','role:post|admin']], function() {
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/dashboard/kedatangan', KedatanganController::class);
    Route::get('/dashboard/kedatanganadd/{id}', [KedatanganController::class, 'add']);
    Route::resource('/dashboard/keberangkatan', KeberangkatanController::class);
    Route::get('/dashboard/keberangkatanadd/{id}', [KeberangkatanController::class, 'add']);
});
