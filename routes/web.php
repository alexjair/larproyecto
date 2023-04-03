<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    //consulta a la base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP',       'slug' => 'php'],
        ['id' => 3, 'title' => 'Laravel',   'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function ($slug) {
    //consulta a la base de datos
    $posts = $slug;

     return view('post', ['post' => $post]);
});
 