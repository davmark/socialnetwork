<?php

Route::get('fire', function ()
{
    Event::fire(new App\Events\PodcastWasPurchased([1,2,3,4]));
    return "event fired";
});

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
    Route::controller('status'      , 'StatusController');
    Route::controller('timeline'    , 'TimelineController');
    Route::controller('friends'     , 'FriendsController');
    Route::controller('chat'        , 'ChatController');
    Route::controller('search'      , 'SearchController');
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
