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


use App\Post;
use App\Video;

Route::get('/', function () {
    $post = Post::first();

    echo 'POST: ' . $post->title;
    foreach ($post->tags as $tag) {
        echo '<li>' . $tag->title . '</li>';
    }

    $video = Video::first();
    echo 'Video: ' . $video->title;
    foreach ($video->tags as $tag) {
        echo '<li>' . $tag->title . '</li>';
    }
});
