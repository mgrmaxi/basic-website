@extends('layouts.app')

@section('content')
<br>
<br>
<h4>Contact us </h4>

<form method="POST" method="submit">
        @csrf
  <div class="form-group">
    <label >Full Name</label>
    <input type="text" class="form-control" id="Name" name='name' placeholder="John Smith..."  value="{{ old('name') }}">
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" id="Email" name='email' placeholder="name@example.com" value="{{ old('email') }}">
  </div>
  
  <div class="form-group">
    <label >Your Message</label>
    <textarea class="form-control" id="Textarea" name="message" rows="4" value="{{ old('message') }}"></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary form-control mb-2">Confirm </button>
  </div>
</form>

@endsection

@section('sidebar')
@parent
append to sidebar just show in about

@endsection
