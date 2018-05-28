@extends('layouts.app')

@section('content')

    <div class=" ">

            <div class="jumbotron justify-content-center">
                <h1 class="display-3">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
            </div>

    @if (count($posts)>0)
        @foreach($posts as $post)
    <div class="card border-secondary mb-3" style="max-width: 50rem;">
        <div class="card-header"><a href="/post/{{$post->id}}">{{$post->title}}</a></div>
        <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">{{$post->body}}</p>
            <span class="badge badge-pill badge-success">{{$post->created_at->toDayDateTimeString()}}</span>
            <a  href="/post/{{$post->id}}"  class="btn btn-primary float-right badge-pill">Read More</a>
        </div>
    </div>
@endforeach
    @endif

   {{--add post form--}}
    <div class="form-group" style="max-width: 50rem;">
    <h4>Add Post </h4>

    <form method="POST" method="store">
        @csrf
        <div class="form-group">
            <label >Title</label>
            <input type="text" class="form-control" id="title" name='title' placeholder="title..."  value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label >Write a Post</label>
            <textarea class="form-control" id="body" name="body" rows="4" value="{{ old('body') }}"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control mb-2">Add Post </button>
        </div>
    </form>
    </div>



@endsection
