<?php

use Ecoflow\Access\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Ecoflow\Access\Controllers\Role\RoleController;
use Ecoflow\Access\Controllers\User\UserController;

// Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
});
