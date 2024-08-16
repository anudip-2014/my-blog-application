@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('register.user') }}" class="btn btn-primary btn-lg">Register as User</a>
                        <a href="{{ route('register.author') }}" class="btn btn-secondary btn-lg">Register as Author</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
