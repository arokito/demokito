@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
       @if (Auth::user()->profile_photo != null)
    <img src="/uploads/profile_photos/{{$user->profile_photo}}" style="width:150px; height:150px; float:left;border-radius:50%; margin-right:25px">
      @else
      <img src="/uploads/profile_photos/default.png" style="width:150px; height:150px; float:left;border-radius:50%; margin-right:25px">
      @endif
      
    <h2>{{$p->email}}</h2>
    <h2> {{$user->name}}</h2>
      <form enctype="multipart/form-data" action="/profile" method="POST">
        <label><h1>update profile photo</h1></label>
        <input type="file" name="profile photo">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="submit" class="pull-right btn btn-sm btn-primary">
    
       </form>
       
      </div>
    
    </div>
</div>
    @endsection