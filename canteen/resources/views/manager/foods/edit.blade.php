@extends('manager.layouts.app')

@section('content')
<div class="col-md-8 mx-auto">
    <a href="{{ url('/manager/foods') }}" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Edit Food</h1>
    {!! Form::open(['action' => ['Manager\FoodsController@update', $food->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $food->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('desc', 'Desc')}}
            {{Form::textarea('desc', $food->desc, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Desc Text'])}}
        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-sm-3">
                {{Form::label('price', 'Price')}}
                {{Form::number('price', $food->price, ['class' => 'form-control', 'placeholder' => 'Price', 'step'=>'0.01'])}}
            </div>
            <div class="col-xs-10 col-sm-7 offset-sm-2">
                {{Form::label('featured','Wanna be featured in the Menu of the Day?',['class'=>'col-xs-10 control-label']) }}
                {{Form::select('featured',[false=>'No', true=>'Yes'], $food->featured, ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-sm-3">
                {{Form::label('category_id', 'Category')}}
                {{Form::select('category_id',[1=>'Western', 2=>'Local'], $food->category_id, ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            <p>Select a picture of not more than 2MB</p>
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection