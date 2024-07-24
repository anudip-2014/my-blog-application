@extends('layouts.app')


@section('content')
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>

   
@endsection


