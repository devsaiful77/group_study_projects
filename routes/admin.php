<?php

use Illuminate\Support\Facades\Route;




Route::group(
    [
        'prefix' => 'admin',
        'middleware' => 'guest:admin'
    ],
    function () {
        Route::get('login', 'AuthenticateController@index')->name('admin.login.form');
        Route::post('login/store', 'AuthenticateController@loginStore')->name('admin.login.store');
    }
);


/* ============================ protected middleware ============================ */

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('dashboard', 'IndexController')->name('dashboard');
    Route::post('logout', 'AuthenticateController@destroy')->name('logout');
});
