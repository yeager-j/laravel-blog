@extends('layout')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Mark</a></p>

        <p>{{ $post->body }}</p>
    </div>

    <hr>

    @include('common.errors')

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea id="body" name="body" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>

    <hr>

    <div class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                <b>{{ $comment->created_at->diffForHumans() }}</b>
                {{ $comment->body }}
            </li>
        @endforeach
    </div>
@endsection