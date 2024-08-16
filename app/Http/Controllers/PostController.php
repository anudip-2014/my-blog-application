<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      $posts = Post::all();
      return view('posts.index', compact('posts'));    
    }
    public function create()
    {
      return view('Posts.create');    
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index'); 
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
        
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    
        /**
         * Update the specified resource in storage.
         */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
                        ->with('success', 'Your Post Update successfully.');
    }
    
        /**
         * Remove the specified resource from storage.
         */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
                       ->with('success','Your post deleted successfully');
    }
    
}
