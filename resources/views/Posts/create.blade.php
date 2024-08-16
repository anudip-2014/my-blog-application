@extends('layouts.app')


@section('content')
<div class="col-lg-8">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
    @csrf 
<div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" required>
</div>
<div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    
   
@endsection