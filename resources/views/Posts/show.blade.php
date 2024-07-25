@extends('layouts.app')


@section('content')
    <h1>Blog Posts Details</h1>
    <a href="{{ url(->previous() }}">Back</a>

    <ul>
       <li>ID: {{ $posts->id}}</li>
       <li>Title: {{ $posts->title}}</li>
       <li>Content: {{ $posts->content}}</li>

    </ul>

   
@endsection