<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('insert');
        return post::all();
    }

    
    public function store(Request $request)
    {
        $post = new Post;
        $post->name=$request->get('name');
        $post->surname=$request->get('surname');
        $post->save();

        echo "<h1>data added.....</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $posts=Post::all();
        return view('show',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post,$id)
    {
        $post=Post::find($id);
        return view('edit',['posts'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post,$id)
    {
        $posts=Post::all();
        $post->name=$request->get('name');
        $post->surname=$request->get('surname');
        $post->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post,$id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('show');
    }
}

//php artisan make:controller PostController --resoruce --model=Post
//yes