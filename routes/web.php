<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


//Version sin Controller
/*
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('blog', function () {
        //consulta a la base de datos
        $posts = [
            ['id' => 1, 'title' => 'PHP',       'slug' => 'php'],
            ['id' => 3, 'title' => 'Laravel',   'slug' => 'laravel']
        ];
        return view('blog', ['posts' => $posts]);
    })->name('blog');

    Route::get('blog/{slug}', function ($slug) {
        //consulta a la base de datos
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');
*/

//Version con Controller
/*
Route::get('/',[PageController::class, 'home'])->name('home');
Route::get('blog',[PageController::class, 'blog'])->name('blog');
Route::get('blog/{slug}',[PageController::class, 'post'])->name('post');
*/

//Agrupando el controllador
Route::controller(PageController::class)->group(function (){

    Route::get('/','home')->name('home');
    Route::get('blog','blog')->name('blog');
    Route::get('blog/{post:slug}','post')->name('post');

});
 