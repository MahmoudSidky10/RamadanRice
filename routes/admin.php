<?php

use App\Http\Controllers\Admin\Dashboard\IndexController;
use App\Http\Controllers\Admin\User\EmployeesController;
use App\Http\Controllers\Admin\User\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/dash', [IndexController::class, 'index']);
Route::get('/edit', [IndexController::class, 'edit']);
Route::put('/updateAdmin', [IndexController::class, 'update']);

// Setting
Route::get('/settings', [IndexController::class, 'settings']);
Route::put('/updateSettings', [IndexController::class, 'updateSettings']);

// logic
Route::resource('employees', EmployeesController::class);
Route::resource('users', UsersController::class);
