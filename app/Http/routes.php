<?php
Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@welcomePage');
    Route::auth();
    Route::get('/home', 'HomeController@homePage');
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('/user', 'UserController@index');
        Route::resource('/post', 'PostController');
        Route::resource('/add-news', 'PostController@addNews');
    });
});