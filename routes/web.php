<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Middleware\CheckUserSession;

Route::get('/', [UserController::class, 'login_pg'])->name('index');
Route::middleware('web')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dash_pg']);
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/new_user', [UserController::class, 'new_user']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/department', [UserController::class, 'department']);
    Route::get('/property', [UserController::class, 'index_property']);
    Route::get('/destination', [ModuleController::class, 'destination']);
    Route::get('/heritage', [ModuleController::class, 'heritage']);
    Route::get('/location', [ModuleController::class, 'index_location']);
    Route::get('/image', [ModuleController::class, 'index_image']);
});
Route::fallback(function () {
    return redirect()->route('index'); // or ->route('index') based on your route name
});
