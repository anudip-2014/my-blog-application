<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PublicPostController extends Controller
{
    public function __construct()
    {
        // Apply the 'auth' middleware to all methods in this controller
        $this->middleware('auth');
        
        // Apply the 'role:author' middleware to specific methods
        $this->middleware('role:author')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }
    public function index()
    {
      $posts = Post::all();
      return view('posts.index', compact('posts'));    
    }
    public function create()
    {
        // Only authors can access this method
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Only authors can access this method
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
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
        // Only authors can access this method
        return view('posts.edit', compact('post'));
    }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Post $post)
        {
            // Only authors can access this method
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
    
            $post->update($request->all());
    
            return redirect()->route('posts.index')
                             ->with('success', 'Post updated successfully.');
        }
    
        /**
         * Remove the specified resource from storage.
         */
    public function destroy(Post $post)
    {
        // Only authors can access this method
        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }

    
}
