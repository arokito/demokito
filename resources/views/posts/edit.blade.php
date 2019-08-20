@extends('layouts.app')

@section('content')

<h1 >edit post</h1>

@foreach($post as $p)

{!! Form::open(['action'=>['PostController@update', $p->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
@method('PUT')
<div class="form-group">   
    {{Form::label('title', 'Title')}}                            
    {{Form::text('title', $p->title ,['class'=>'form-control','placeholder'=>'Title'])}}               
  </div>
  <div class="form-group">   
    {{Form::label('body', 'Body')}}                            
    {{Form::textarea('body', $p->body ,['class'=>'form-control','placeholder'=>'body texts'])}}               
  </div>
  <div class="form-group">
    {{Form::file('aron_image')}}
  </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}
@endforeach

@endsection