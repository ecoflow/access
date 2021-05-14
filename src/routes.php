<?php

use Illuminate\Support\Facades\Route;
use Ecoflow\Access\Controllers\Role\RoleController;

Route::group(['namespace' => 'Ecoflow\Access\Controllers\Auth', 'middleware' => 'web'], function () {
    Route::post('register', 'RegisterController@register');

    Route::post('login', 'LoginController@login');

    Route::post('logout', 'LoginController@logout');

});

Route::group(['middleware' => 'web'], function () {
    Route::resource('role', RoleController::class);
});
