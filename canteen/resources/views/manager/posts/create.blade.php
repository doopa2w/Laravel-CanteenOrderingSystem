@extends('manager.layouts.app')

@section('content')
<div class="col-md-8 mx-auto">
    <a href="{{ url('/manager/posts') }}" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Add Post</h1>
    {!! Form::open(['action' => 'Manager\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title',['class'=>'col-xs-10 control-label'])}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body',['class'=>'col-xs-10 control-label'])}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            <p>Select a picture of not more than 2MB</p>
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">  
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
</div>
@endsection