@extends('customer.layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <span class="float-left">
            <a href="{{ url('/posts') }}" class="btn btn-primary">Go Back</a>
        </span>
    </div>
</div>
<br>

<div class="jumbotron">
    <h1>{{$post->title}}</h1>
    <hr>
    <img style="width:100%;" src="{{url('/storage/cover_images')}}/{{$post->cover_image}}">
    <hr>
    Written on {{$post->created_at}} by {{$post->manager->name}}
    <hr>
    <h4>{!!$post->body!!}</h4>
</div>
@endsection