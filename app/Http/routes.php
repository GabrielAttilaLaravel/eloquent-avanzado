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

use App\Book;

Route::get('/', function () {
    // para resolver el problema de N+1:
    // with: muestra todos los libros con el nombre del metodo con la relacion
    $books = Book::with('category', 'user')->get();
    return view('home', compact('books'));
});
