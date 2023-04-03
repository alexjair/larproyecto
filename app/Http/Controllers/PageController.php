<?php

namespace App\Http\Controllers;

use App\models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function blog(){
        
        /* Consulta all registros de Post*/ 
        //$posts = Post::get();

        //$Post = Post::firt();
        //$Post = Post::find(25);
    
        //
        
        $posts = Post::latest()->paginate();
        
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post){
        //dd($post);
        return view('post', ['post' => $post]);
    }
}
