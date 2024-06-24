@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>

            <h2 class="mt-4">Posts</h2>
            @foreach($posts as $post)
                @include('posts.partials.post', ['post' => $post])
            @endforeach
        </div>
    </div>
</div>
@endsection
