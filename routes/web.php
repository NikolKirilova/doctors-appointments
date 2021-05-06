<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/new-appointment/{doctorId}/{date}', [FrontendController::class, 'show'])
    ->name('create.appointment');

 

Route::get('/dashboard', [DashboardController::class, 'index']);  

 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','admin']], function(){

    Route::resource('doctor', DoctorController::class);
});

Route::group(['middleware'=>['auth','doctor']], function(){

       Route::resource('appointment', AppointmentController::class);
       Route::post('/appointment/check','App\Http\Controllers\AppointmentController@check')->name('appointment.check');
       Route::post('/appointment/update','App\Http\Controllers\AppointmentController@updateTime')->name('update');

    });