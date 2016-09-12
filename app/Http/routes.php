<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::auth();

    Route::resource('students', 'StudentsController', ['only' => ['index', 'create']]);

    // user route
    Route::get('users/ajax', ['uses' => 'UsersController@listAjax', 'as' => 'users.ajax']);
    Route::resource('users', 'UsersController');
});