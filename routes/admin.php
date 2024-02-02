<?php

use App\Http\Controllers\Admin\Dashboard\IndexController;
use App\Http\Controllers\Admin\User\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/dash', [IndexController::class, 'index']);
Route::resource('users', UsersController::class);
