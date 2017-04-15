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

use App\Page;

Route::get('/', function () {
    $page = Page::find(11);

    echo $page->name;
    foreach ($page->comments as $comment){
        echo '<li>' . $comment->body . '</li>';
    }
});
