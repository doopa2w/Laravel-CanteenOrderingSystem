@extends('manager.layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <span class="float-left">
            <h3>Your Restaurant Posts</h3>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <a href="{{url('/manager/posts/create')}}" class="btn btn-primary">New</a>
        </span>
    </div>
</div>
<br>

<table class="table table-striped table-bordered table-responsive-sm">
    <tr>
        <th style="width:155px;"></th>
        <th>Title</th>
        <th>Body</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>
                <div class="input-group">
                    @if(Auth::guard('manager')->id() == $post->manager->id)
                        <a href="{{url('/manager/posts')}}/{{$post->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                        {!! Form::open(['action'=>['Manager\PostsController@destroy',$post->id], 'method'=>'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete',[ 'class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                    @endif
                </div>
            </td>
            <td><a href="{{url('/manager/posts')}}/{{$post->id}}">{{$post->title}}</a></td>
            <td>
                {{ str_limit($post->body, $limit=150, $end = '...') }}
            </td>
        </tr>
    @endforeach
</table>
@if(count($posts) == 0)
    <p>No post found.</p>
@endif
{{$posts->links()}}
@endsection