@extends('customer.layouts.app')

@section('content')
<div class="btn-toolbar">
    <a href="{{ url('/foods') }}" class="btn btn-primary">Go Back</a>
</div>
<br>

<div class="col-md-5 p-0">
{!! Form::open(['action' => ['Customer\OrdersController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <h1>Ordering: {{$food->title}}</h1>
    <hr>
    <img style="height:240px;" src="{{url('/storage/cover_images')}}/{{$food->cover_image}}">
    <hr>
    <h4>Final Price: RM{{$food->price}}</h4>
    <br>
    {{Form::hidden('food_id', $food->id)}}
    <div class="form-group row">
        <div class="col-sm-4">
        {{ Form::label('payment_gateway','Payment Method:')}}
        </div>
        <div class="col-sm-6">
        {{ Form::select('payment_gateway',['cash'=>'Cash', 'credit card'=>'Credit Card'], null, ['class' => 'form-control'] ) }}
        </div>
    </div>
    {{Form::submit('Confirm', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection