@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>

    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
