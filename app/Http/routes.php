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

Route::get('/', function () {
    $books = \App\Books::get();
    return view('destroy', compact('books'));
});

Route::delete('destroy', function (\Illuminate\Http\Request $request) {
    $ids = $request->get('ids');

    if (count($ids)){
        \App\Books::destroy($ids);
    }

    return back();
});
