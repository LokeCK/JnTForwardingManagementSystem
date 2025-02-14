<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::resource('schedules','ScheduleController');
Route::resource('master','MasterController');

Route::get('/welcome','MasterController@welcome');
Route::get('/viewSchedule','ScheduleController@index');

Route::resource('order',OrderController::class);

Route::patch('order/{orderID}','OrderController@update')->name('order.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
