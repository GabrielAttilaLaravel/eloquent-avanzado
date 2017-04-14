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
    $user = User::find(1);

    echo $user->name;
    // usamos la variable que tiene la entidad y el metodo de relacion
    foreach ($user->exams as $exam){
        echo
            '<li>'
            . $exam->title
            . ' - Nota: ' .$exam->pivot->score . ' pts.'
            . ' - fecha: ' .$exam->pivot->created_at
            .'</li>';

    };
});
