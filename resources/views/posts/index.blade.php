@extends('layouts.app')

@section('content')

      @foreach($posts as $post)
           <div class="well">
                 <div class="row">
                       <div class="col-md-4 col-sm-4">
                       </div>
                       <div  class="col-md-4 col-sm-4">
                       <img style="width:10%"src="/storage/aron_images/{{$post->aron_image}}" class="img-thumbnail">
                       </div>
                       <div class="col-md-4 col-sm-4">
                              <h2> <a href ="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                              <small>written on{{$post->created_at}}</small>
                              <a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                       </div>

                 </div>
           
        </div>
      @endforeach
    
      
    
@endsection