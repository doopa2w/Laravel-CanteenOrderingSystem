<?php

Route::group(['namespace' => 'Manager'], function() {

    Route::get('/', 'HomeController@index')->name('manager.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('manager.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('manager.logout');

    // Register
    //Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('manager.register');
    //Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('manager.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('manager.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('manager.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('manager.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('manager.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('manager.verification.verify');

    Route::resource('/foods', 'FoodsController', ['as' => 'manager']);
    Route::resource('/posts', 'PostsController', ['as' => 'manager']);
});