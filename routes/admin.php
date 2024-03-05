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
Route::get('users-from-print/{id}', [UsersController::class, 'usersFromPrint'])->name('admin.users.usersFromPrint');
Route::get('orders/export/{status}', [UsersController::class, 'export'])->name('admin.order.export');

Route::get('/orders', [UsersController::class, 'orders']);
Route::get('/orders/details/{id}', [UsersController::class, 'orderDetails'])->name('admin.order.details');
Route::get('/orders/edit/{id}', [UsersController::class, 'orderEdit'])->name('admin.order.orderEdit');
Route::post('/orders/update/{id}', [UsersController::class, 'orderUpdate'])->name('admin.order.orderUpdate');

Route::get('/orders/{id}/toMarketOrdersStatus', [UsersController::class, 'toMarketOrdersStatus'])->name('admin.order.toMarketOrdersStatus');
Route::get('/orders/{id}/toNotificationOrdersStatus', [UsersController::class, 'toNotificationOrdersStatus'])->name('admin.order.toNotificationOrdersStatus');
Route::post('/orders/{id}/updateStatus', [UsersController::class, 'updateStatus'])->name('admin.order.updateStatus');

// orders by status
Route::get('/orders/pending', [UsersController::class, 'pendingOrders'])->name('admin.order.pendingOrders');
Route::get('/orders/accepted', [UsersController::class, 'acceptedOrders'])->name('admin.order.acceptedOrders');
Route::get('/orders/review', [UsersController::class, 'reviewOrders'])->name('admin.order.reviewOrders');
Route::get('/orders/rejected', [UsersController::class, 'rejectedOrders'])->name('admin.order.rejectedOrders');
Route::get('/orders/reUpdated', [UsersController::class, 'reUpdatedOrders'])->name('admin.order.reUpdatedOrders');
Route::get('/orders/toMarket', [UsersController::class, 'toMarketOrders'])->name('admin.order.toMarket');
Route::get('/orders/notificationOrders', [UsersController::class, 'notificationOrders'])->name('admin.order.notificationOrders');

Route::resource('socialSituations', SocialSituationController::class);
