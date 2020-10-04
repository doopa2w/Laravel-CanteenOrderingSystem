<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Food;
use App\Order;
use App\Customer;
use Carbon\Carbon;

class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customer.auth:customer');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        $customer_id = Auth::guard('customer')->id();
        $customer = Customer::find($customer_id);
        return view('customer.orders.index')->with('orders', $customer->orders()->orderBy('created_at','desc')->paginate(10))->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $food = Food::find($request['food_id']);
        return view('customer.orders.create')->with('food', $food);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->validate($request, [
        //]);
        
        $food_id = $request['food_id'];
        $food = Food::find($food_id);

        // Create Order
        $order = new Order;
        $order->customer_id = Auth::guard('customer')->id();
        $order->food_id = $food_id;
        $order->manager_id = $food->manager->id;
        $order->billing_total = $food->price;
        $order->status = 'preparing';
        $order->payment_gateway = $request->input('payment_gateway');
        //$order->paid = false;
        $order->save();

        return redirect('/orders/'.$order->id)->with('success', 'Payment Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $food= Food::find($order->food_id);

        if(Auth::guard('customer')->id() !== $order->customer->id){
            return redirect('/orders')->with('error', 'Unauthorized Page');
        }
        
        $food= Food::find($order->food_id);
        $date = Carbon::now()->toDateTimeString();

        return view('customer.orders.show')->with('order', $order)->with('food', $food)->with('date', $date);
    }
}
