<?php

use App\Http\Controllers\Admin\Dashboard\IndexController;
use App\Http\Controllers\Admin\SocialSituationController;
use App\Http\Controllers\Admin\User\EmployeesController;
use App\Http\Controllers\Admin\User\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/dash', [IndexController::class, 'index']);
Route::get('/reports', [IndexController::class, 'reports']);
Route::get('/edit', [IndexController::class, 'edit']);
Route::put('/updateAdmin', [IndexController::class, 'update']);

// Setting
Route::get('/settings', [IndexController::class, 'settings']);
Route::put('/updateSettings', [IndexController::class, 'updateSettings']);

// logic
Route::resource('employees', EmployeesController::class);

Route::resource('users', UsersController::class);
Route::get('users/{id}/print', [UsersController::class, 'print'])->name('admin.users.print');
Route::get('orders/export/{status}', [UsersController::class, 'export'])->name('admin.order.export');

Route::get('/orders', [UsersController::class, 'orders']);
Route::get('/orders/details/{id}', [UsersController::class, 'orderDetails'])->name('admin.order.details');
Route::post('/orders/{id}/updateStatus', [UsersController::class, 'updateStatus'])->name('admin.order.updateStatus');

Route::resource('socialSituations', SocialSituationController::class);
