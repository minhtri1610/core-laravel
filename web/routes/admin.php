<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\AuthController;
    use App\Http\Controllers\Admin\DashboardController;

    Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('admin/login', [AuthController::class, 'postLogin'])->name('admin.login.submit');

    Route::middleware(['auth.admin'])->prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');;
        Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
