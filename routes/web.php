<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Middleware\CheckUserSession;

Route::get('/', [UserController::class, 'login_pg'])->name('index');
Route::get('/dashboard', [UserController::class, 'dash_pg'])->middleware('check_log');
Route::get('/user', [UserController::class, 'index'])->middleware('check_log');
Route::post('/new_user', [UserController::class, 'new_user'])->middleware('check_log');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->middleware('check_log');
Route::get('/department', [UserController::class, 'department'])->middleware('check_log');
Route::post('/new_department', [ModuleController::class, 'new_department'])->middleware('check_log');
Route::get('/property', [UserController::class, 'index_property'])->middleware('check_log');
Route::post('/new_property', [ModuleController::class, 'new_property'])->middleware('check_log');
Route::get('/destination', [ModuleController::class, 'destination'])->middleware('check_log');
Route::get('/heritage', [ModuleController::class, 'heritage'])->middleware('check_log');
Route::get('/location', [ModuleController::class, 'index_location'])->middleware('check_log');
Route::get('/image', [ModuleController::class, 'index_image'])->middleware('check_log');
Route::fallback(function () {
    return redirect()->route('index'); // or ->route('index') based on your route name
});
