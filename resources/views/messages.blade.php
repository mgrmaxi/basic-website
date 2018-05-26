@extends('layouts.app')

@section('content')

<div class="container">

    @if(count($messages)>0)
        @foreach($messages as $message)

<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title" >{{$message->name}}</h5>
    <h6 class="card-text">{{$message->email}}</h6>
    <p class="card-text">{{$message->message}}</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>

        @endforeach
    @endif
</div>



@endsection

@section('sidebar')
@parent
append to sidebar just show in home

@endsection
