<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LoginOutController;
use Illuminate\Support\Facades\Route;


// Admin Routes :-
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin-login', [LoginController::class, 'login']);
Route::post('/admin-logout', [LoginOutController::class, 'index']);
Route::get('/logout', [LoginOutController::class, 'index']);
