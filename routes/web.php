<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/attendance/start', [App\Http\Controllers\AttendanceController::class, 'startAttendance'])->name('startAttendance');

Route::get('/attendance/end', [App\Http\Controllers\AttendanceController::class, 'endAttendance']);

Route::get('/break/start', [App\Http\Controllers\RestController::class, 'startBreak']);

Route::get('/break/end', [App\Http\Controllers\RestController::class, 'endBreak']);

Route::get('/attendance/get', [App\Http\Controllers\AttendanceController::class, 'getAttendance']);

Route::get('/attendance/user_list', [App\Http\Controllers\AttendanceController::class, 'userList']);






