<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LoginOutController;
use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;


// Client Routes :-
Route::get('/sms', [ClientController::class, 'sms'])->name("sms");
Route::get('/', [ClientController::class, 'index'])->name("home");
Route::get('/client/login', [ClientController::class, 'index'])->name('client.login');
Route::post('/client/login', [ClientController::class, 'login'])->name('client-login');
Route::post('/client/order/store', [ClientController::class, 'orderStore'])->name('client.order.store');
Route::get('/client/order/store/details', [ClientController::class, 'orderDetails'])->name('client.order.details');
Route::get('/client/order/child/create', [ClientController::class, 'orderChildCreate'])->name('client.order.child.create');
Route::post('/client/order/child/store', [ClientController::class, 'orderChildStore'])->name('client.order.child.store');


// Admin Routes :-
Route::get('/login', [LoginController::class, 'index']);
Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin-login', [LoginController::class, 'login']);
Route::post('/admin-logout', [LoginOutController::class, 'index']);
Route::get('/logout', [LoginOutController::class, 'index']);


