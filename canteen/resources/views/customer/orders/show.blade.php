@extends('customer.layouts.app')

@section('content')
<div class="btn-toolbar">
    <a href="{{ url('/orders') }}" class="btn btn-primary mr-2">Go Back</a>
</div>
<br>

<div class="col-md-8 p-0">
<h1>Receipt</h1>
<hr>
<p>Canteen Ordering System</p>
<p>Date Ordered: {{$order->created_at}}</p>
<p>Payment Method: {{$order->payment_gateway}}</p>
<p>Status: {{$order->status}}</p>
<br>
<table class="table table-bordered">
    <tr>
        <th></th>
        <th>Item</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>1</td>
        <td>{{$food->title}}</td>
        <td>RM{{$food->price}}</td>
    </tr>
    <tr>
        <td></td>
        <th>Total</th>
        <td>RM{{$food->price}}</td>
    </tr>
</table>
<br>
<p>Print date: {{$date}}</p>
<button onClick="window.print()">Print this page</button>
</div>
@endsection