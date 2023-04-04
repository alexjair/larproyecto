<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

/************[ MODULO : POST ]************/
//Definicion de rutas
//Route::resource('posts',PostController::class);
Route::resource('posts',PostController::class)->except(['show']);


/********* LOGIN DASHBOARD ***********/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
