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

use App\Category;

Route::get('/', function () {
    // whereHas: nos permite añadir un segundo argumento para generar la consulta
    // la cual trae todas las categorias que tengan libros y que sean publicas
    $categories = Category::whereHas('books', function ($query){
        $query->where('status', 'public');
    })->get();

    return view('relacion', compact('categories'));
});