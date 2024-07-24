<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
     return view('Posts.index');    
    }
    public function create()
    {
     return view('Posts.create');    
    }
    public function show()
    {
     return view('Posts.create');    
    }
}
  