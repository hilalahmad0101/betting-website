<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix("admin")->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get("/dashboard", 'index')->name("admin.dashboard");
    });

    Route::controller(AuthController::class)->group(function () {
        Route::get("/login", 'index')->name("admin.login");
        Route::post("/make/login", action: 'login')->name("admin.make.login");
    });
});