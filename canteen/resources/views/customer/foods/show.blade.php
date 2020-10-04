@extends('customer.layouts.app')

@section('content')
<div class="btn-toolbar">
    <a href="{{ url('/foods') }}" class="btn btn-primary mr-2">Go Back</a>
    {!!Form::open(['action' => ['Customer\OrdersController@create'], 'method' => 'POST'])!!}
    {{Form::hidden('food_id', $food->id)}}
    {{Form::submit('Order', ['class' => 'btn btn-success'])}}
    {!!Form::close()!!}
</div>
<br>

<div class="jumbotron">
    <h1>{{$food->title}}</h1>
    <hr>
    <img style="width:100%;" src="{{url('/storage/cover_images')}}/{{$food->cover_image}}">
    <hr>
    <h3>Price: RM{{$food->price}}</h3>
    <br>
    <h3>Description:</h3>
    <h4>{!!$food->desc!!}</h4>
</div>
@endsection