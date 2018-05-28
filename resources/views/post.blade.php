@extends('layouts.app')

@section('content')





    <div class="card border-secondary mb-3" style="max-width: 50rem;">
        <div class="card-header">{{$post->title}}</div>
        <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">{{$post->body}}</p>
        </div>
    </div>






@endsection
