<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postsController extends Controller
{

    public function posts(){

        $posts = Post::all();

        return view('posts', compact('posts'));
    }
    public function post($id){

        $post = Post::find($id);

        return view('post', compact('post'));
    }

    public function store(){

//        short
Post::create(request()->all());
//        $post = New Post;
//        $post->title = request('title');
//        $post->body = request('body');
//        $post->save();
        return redirect("/posts");

    }




}


