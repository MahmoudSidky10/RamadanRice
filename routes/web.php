<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LoginOutController;
use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;


// Client Routes :-
Route::get('/', [ClientController::class, 'index']);
Route::get('/client/login', [ClientController::class, 'index'])->name('client.login');
Route::post('/client/login', [ClientController::class, 'login'])->name('client-login');


// Admin Routes :-
Route::get('/login', [LoginController::class, 'index']);
Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin-login', [LoginController::class, 'login']);
Route::post('/admin-logout', [LoginOutController::class, 'index']);
Route::get('/logout', [LoginOutController::class, 'index']);


