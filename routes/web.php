<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LoginOutController;
use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;


// Client Routes :-
Route::get('/sms', [ClientController::class, 'sendSms'])->name("sms");
Route::get('/update-to-market', [ClientController::class, 'updateToMarket'])->name("updateToMarket");
Route::get('/', [ClientController::class, 'index'])->name("home");

Route::get('/client/otp', [ClientController::class, 'otp'])->name('client.otp');
Route::get('/client/client-otp-resend', [ClientController::class, 'resendOtp'])->name('client-otp-resend');
Route::post('/client/otpCheck', [ClientController::class, 'otpCheck'])->name('client-otp');

Route::get('/client/login', [ClientController::class, 'index'])->name('client.login');
Route::post('/client/login', [ClientController::class, 'login'])->name('client-login');

Route::post('/client/order/store', [ClientController::class, 'orderStore'])->name('client.order.store');
Route::get('/client/order/store/details', [ClientController::class, 'orderDetails'])->name('client.order.details');
Route::get('/client/order/store/update', [ClientController::class, 'orderUpdate'])->name('client.order.update');
Route::any('/client/order/store/updateData', [ClientController::class, 'updateData'])->name('client.order.updateData');

Route::get('/client/order/child/create', [ClientController::class, 'orderChildCreate'])->name('client.order.child.create');
Route::get('/client/order/child/create/newRecord', [ClientController::class, 'orderChildCreateRecord'])->name('client.order.child.newRecord');
Route::post('/client/order/child/store', [ClientController::class, 'orderChildStore'])->name('client.order.child.store');

Route::get('/client/order/child/delete/{id}', [ClientController::class, 'orderChildDelete'])->name('client.order.child.delete');
Route::get('/client/order/child/edit/{id}', [ClientController::class, 'orderChildEdit'])->name('client.order.child.edit');
Route::post('/client/order/child/update/{id}', [ClientController::class, 'orderChildUpdate'])->name('client.order.child.update');


// Admin Routes :-
Route::get('/login', [LoginController::class, 'index']);
Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin-login', [LoginController::class, 'login']);
Route::post('/admin-logout', [LoginOutController::class, 'index']);
Route::get('/logout', [LoginOutController::class, 'index']);


