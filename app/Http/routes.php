<?php
/**
 * Frontend
 */

Route::group([], function () {
    Route::get('/'   , 'HomeController@getIndex');
    Route::controller('home'   , 'HomeController');
    Route::controller('auth'   , 'AuthController');

});

/**
 * Admin
 */
//Route::controller('admin/dashboard'   , 'Admin\DashboardController');

Route::group([
    'middleware' => 'User',
    'namespace'  => 'User',
    'prefix'     => 'user',
], function () {
    Route::controller('search'   , 'SearchController');
    Route::controller('profile'  , 'ProfileController');
    Route::controller('friend'   , 'FriendController');
    Route::controller('status'   , 'StatusController');
});

/**
 * User
 */
//Route::controller('admin/dashboard'   , 'Admin\DashboardController');

Route::group([
    'middleware' => 'Admin',
    'namespace'  => 'Admin',
    'prefix'     => 'admin',
], function () {
    Route::controller('dashboard'   , 'DashboardController');
});

Route::controller('admin'       , 'Admin\AdminController');

