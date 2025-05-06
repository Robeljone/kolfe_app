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
Route::get('/request', [ModuleController::class, 'request_pg'])->middleware('check_log');
Route::get('/approval', [ModuleController::class, 'approval_pg'])->middleware('check_log');
Route::post('/new_department', [ModuleController::class, 'new_department'])->middleware('check_log');
Route::get('/property', [UserController::class, 'index_property'])->middleware('check_log');
Route::post('/new_property', [ModuleController::class, 'new_property'])->middleware('check_log');
Route::get('/destination', [ModuleController::class, 'destination'])->middleware('check_log');
Route::post('/new_destination', [ModuleController::class, 'new_destination'])->middleware('check_log');
Route::get('/heritage', [ModuleController::class, 'heritage'])->middleware('check_log');
Route::post('/new_heritage', [ModuleController::class, 'new_heritage'])->middleware('check_log');
Route::get('/location', [ModuleController::class, 'location'])->middleware('check_log');
Route::post('/new_location', [ModuleController::class, 'new_location'])->middleware('check_log');
Route::get('/image', [ModuleController::class, 'index_image'])->middleware('check_log');
Route::get('/craft', action: [ModuleController::class, 'craft'])->middleware('check_log');
Route::post('/new_craftlist', [ModuleController::class, 'new_craftlist'])->middleware('check_log');
Route::get('/craft_list/{id}', [ModuleController::class, 'craft_list'])->middleware('check_log')->name('craft_detail');
Route::post('/new_craft', [ModuleController::class, 'new_craft'])->middleware('check_log');
Route::fallback(function () {
    return redirect()->route('index');
});
