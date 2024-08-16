@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    


                </div>
                 
            </div>
            </div>
            @if (auth()->user()->role === 'author')
                <a href="{{ route('posts.create') }}" class="btn btn-primary mt-3">
                    {{ __('Create Post') }}
                </a>
            @endif
            <!-- Display posts -->
            <div class="mt-4">
                        <h2>All Posts</h2>
                        @if($posts->isEmpty())
                            <p>No posts available.</p>
                        @else
                            <ul>
                                @foreach($posts as $post)
                                    <li>
                                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
        
    </div>
</div>
@endsection
