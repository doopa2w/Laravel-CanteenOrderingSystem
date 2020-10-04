@extends('manager.layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <span class="float-left">
            <h3>Your Restaurant Foods</h3>
        </span>
    </div>
    <div class="col">
        <span class="float-right">
            <a href="{{url('/manager/foods/create')}}" class="btn btn-primary">New</a>
        </span>
    </div>
</div>
<br>
@if(count($foods)>0)
    <table class="table table-striped table-bordered table-responsive-sm">
        <tr>
            <th style="width:155px;"></th>
            <th>Name</th>
            <th>Price</th>
            <th>Featured</th>
            <th class="fit"></th>
        </tr>
        @foreach($foods as $food)
            <tr>
                <td>
                    <div class="input-group">
                        @if(Auth::guard('manager')->id() == $food->manager->id)
                            <a href="{{url('/manager/foods')}}/{{$food->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                            {!! Form::open(['action'=>['Manager\FoodsController@destroy',$food->id], 'method'=>'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete',[ 'class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </td>
                <td><a href="{{url('/manager/foods')}}/{{$food->id}}">{{$food->title}}</a></td>
                <td>RM {{$food->price}}</td>
                <td align="center">
                {!! Form::open(['action'=>['Manager\FoodsController@update',$food->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    {{Form::hidden('title', $food->title)}} <!--workaround-->
                    {{Form::hidden('desc', $food->desc)}}
                    {{Form::hidden('price', $food->price)}}
                    {{Form::hidden('category_id', $food->category_id)}}
                    {{ Form::select('featured',
                        [false=>'No', true=>'Yes'], 
                        $food->featured, ['class' => 'form-control'] ) }} 
                    {{Form::hidden('_method', 'PUT')}}
                </td>
                <td align="center">
                    {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                </td>
                {!! Form::close() !!}
            </tr>
        @endforeach
    </table>
    {{$foods->links()}}
@else
    <p>No food found</p>
@endif
@endsection