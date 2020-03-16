<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Ecoflow\Access\Controllers\Auth', 'middleware' => 'web'], function () {
    Route::post('register', 'RegisterController@register');

    Route::post('login', 'LoginController@login');

    Route::post('logout', 'LoginController@logout');
});
