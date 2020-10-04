@extends('staff.layouts.app')

@section('content')
<h3>Your Restaurant Orders</h3>
<br>
@if(count($orders) > 0)
    <table class="table table-striped table-bordered table-responsive-sm">
        <tr>
            <th>Order ID</th>
            <th>Food</th>
            <th>Ordered by</th>
            <th>Order Date</th>
            <th>Status</th>
            <th></th>
        </tr>
        @foreach($orders as $order)
            @foreach($foods as $food)
                @if($food->id == $order->food_id)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$food->title}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                        {!! Form::open(['action' => ['Staff\OrdersController@update', $order->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            {{ Form::select('status',
                                ['preparing'=>'Preparing','ready'=>'Ready','collected'=>'Collected','cancelled'=>'Cancelled'],
                                $order->status, ['class' => 'form-control'] ) }}
                            {{Form::hidden('_method','PUT')}}
                        </td>
                        <td>
                            {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endif
            @endforeach
        @endforeach
    </table>
    {{$orders->links()}}
@else
    <p>No orders found</p>
@endif
@endsection