<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;

Route::get('/', function () {
    $users = User::all();

    return view('manytomany.index', compact('users'));
});

Route::get('edit-manytomany/{user_id}', [
   'as' => 'getEdit',
   'uses' => 'UserController@getEditManyToMany'
]);

Route::put('put-manytomany/{user_id}', [
    'as' => 'putEdit',
    'uses' => 'UserController@putEditManyToMany'
]);