<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Food;
use App\Order;

class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('staff.auth:staff');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff_id = Auth::guard('staff')->id();
        $foods = Food::get();
        //$orders = Order::where('staff_id', $staff_id);
        $orders = Order::orderBy('created_at','desc')->paginate(20);
        return view('staff.orders.index')->with('orders', $orders)->with('foods', $foods);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Add validation code
        
        $order = Order::find($id);
        $order->status = $request->input('status');
        $order->save();
        return redirect('/staff/orders')->with('success', 'Order '.$order->id.': '.$order->status);
    }
}
