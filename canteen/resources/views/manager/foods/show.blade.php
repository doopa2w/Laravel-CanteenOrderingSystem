@extends('manager.layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <span class="float-left">
            <a href="{{ url('/manager/foods') }}" class="btn btn-primary">Go Back</a>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <div class="btn-toolbar">
            @if(Auth::guard('manager')->id() == $food->manager->id)
                <a href="{{ url('/manager/foods') }}/{{$food->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                {!!Form::open(['action' => ['Manager\FoodsController@destroy', $food->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return ConfirmDelete()'])!!}
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
    <h1>{{$food->title}}</h1>
    <hr>
    <img style="width:100%" src="{{url('/storage/cover_images')}}/{{$food->cover_image}}">
    <hr>
    <h3>Price: RM{{$food->price}}</h3>
    <br>
    <h3>Description:</h3>
    <h4>{!!$food->desc!!}</h4>
</div>
@endsection