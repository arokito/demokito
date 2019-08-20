@extends('layouts.app')

@section('content')

    

     <a href="/posts"  class="btn btn-primary" >go back </a>   
     @foreach($post as $p)
           <h1>{{$p->body}}</h1>
         
           
<small> written on {{$p->created_at}} by {{$p->user->name}}</small>
      @endforeach
      
      
    
      
    
@endsection