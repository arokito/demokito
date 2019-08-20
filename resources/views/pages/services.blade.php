@extends('layouts.app')
@section('content')
        


@if(count($data['services']) > 0)
<div class="jumbotron text-center">
    <ul class ="list-group">
        @foreach($data['services'] as $service)
        <li class = "list-group-item">{{$service}}</li>
        @endforeach
    </ul>
</div>   
@endif


@endsection


