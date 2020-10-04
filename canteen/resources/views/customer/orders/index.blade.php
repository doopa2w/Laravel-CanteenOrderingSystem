@extends('customer.layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <span class="float-left">
            <h3>Your Order History</h3>
        </span>
    </div>
</div>
<br>

<table class="table table-striped table-bordered table-responsive-sm">
    <tr>
        <th class="fit">Food</th>
        <th >Food Name</th>
        <th>Order ID</th>
        <th>Food ID</th>
        <th>Order Date</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
    @foreach($orders as $order)
        @foreach($foods as $food)
            @if($food->id == $order->food_id)
                <tr>
                    <td><img style="height:140px;" src="{{url('/storage/cover_images')}}/{{$food->cover_image}}"></td>
                    <td>
                        <a href="{{url('/orders')}}/{{$order->id}}">{{$food->title}}</a>
                    </td>
                    <td>{{$order->id}}</td>
                    <td>{{$order->food_id}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>RM{{$order->billing_total}}</td>
                    <td>{{$order->status}}</td>
                </tr>
            @endif
        @endforeach
    @endforeach
</table>
@if(count($orders) == 0)
    No orders found.
@endif
{{$orders->links()}}
@endsection