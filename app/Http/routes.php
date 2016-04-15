<?php
/**
 *  Site route part
 */
Route::group([], function () {
    Route::get('/'             , 'HomeController@getIndex');
    Route::controller('home'   , 'HomeController');
    Route::controller('auth'   , 'Auth\AuthController');
});

/**
 *  User route part
 */
Route::group([
    'middleware' => ['user'],
    'prefix'     => 'user',
    'namespace'  => 'User',
], function () {
    Route::controller('settings'    , 'SettingsController');
    Route::controller('friends'     , 'FriendsController');
    Route::controller('search'     , 'SearchController');
    Route::controller(''            , 'UserController');
});

/**
 *  Company route part
 */
Route::group([
    'middleware' => ['company'],
    'prefix'     => 'company',
    'namespace'  => 'Company',
], function () {
    Route::controller('settings'    , 'SettingsController');
    Route::controller(''            , 'CompanyController');
});

/**
 *  Festival route part
 */
Route::group([
    'middleware' => ['festival'],
    'prefix'     => 'festival',
    'namespace'  => 'Festival',
], function () {
    Route::controller('settings'    , 'SettingsController');
    Route::controller(''            , 'FestivalController');
});