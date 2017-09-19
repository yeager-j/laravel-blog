@extends('layout')

@section('content')
    <h1>Create a post</h1>

    <hr>

    @include('common.errors')

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="body">Text</label>
            <textarea id="body" name="body" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection