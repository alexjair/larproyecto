<?php

namespace App\Http\Controllers;

use App\models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(Request $request){

        /* Consulta all registros de Post*/ 
        //$posts = Post::get();

        //$Post = Post::firt();
        //$Post = Post::find(25);
    
        $search = $request->search;

        //dd($search);

        //$posts = Post::latest()->paginate();
        $posts = Post::where('title','LIKE',"%{$search}%")
                        ->with('user')
                        ->latest()
                        ->paginate();
        //dd($posts);

        return view('home', ['posts' => $posts]);
    }

    public function post(Post $post){
        //dd($post);

        return view('post', ['post' => $post]);
    }
}
