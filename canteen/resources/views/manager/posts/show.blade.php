@extends('manager.layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <span class="float-left">
            <a href="{{ url('/manager/posts') }}" class="btn btn-primary">Go Back</a>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <div class="btn-toolbar">
            @if(Auth::guard('manager')->id() == $post->manager->id)
                <a href="{{ url('/manager/posts') }}/{{$post->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                {!!Form::open(['action' => ['Manager\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return ConfirmDelete()'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
            </div>
        </span>
    </div>
</div>
<br>
<div class="jumbotron">
    <h1>{{$post->title}}</h1>
    <hr>
    <img style="width:100%" src="{{url('/storage/cover_images')}}/{{$post->cover_image}}">
    <hr>
    Written on {{$post->created_at}} by {{$post->manager->name}}
    <hr>
    <h3>{!!$post->body!!}</h3>
</div>
@endsection