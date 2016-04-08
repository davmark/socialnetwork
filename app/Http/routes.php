<?php

/**
 *  Site route part
 */
Route::group(['middleware'=>'web'], function () {
    Route::get('/'             , 'HomeController@getIndex');
    Route::controller('home'   , 'HomeController');
    Route::controller('auth'   , 'Auth\AuthController');
});

/**
 *  Site route part
 */
Route::group([
    'middleware' => ['web','user'],
    'prefix'     => 'user',
    'namespace'  => 'User',
], function () {
    Route::controller(''   , 'UserController');
});