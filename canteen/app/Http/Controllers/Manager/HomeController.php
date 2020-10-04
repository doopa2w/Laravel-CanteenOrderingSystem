<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Charts\FoodPopularity;

class HomeController extends Controller
{

    protected $redirectTo = '/manager/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('manager.auth:manager');
    }

    /**
     * Show the Manager dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $chart = new FoodPopularity;
        $today_orders = Order::whereDate('created_at', today())->count();
        $yesterday_orders = Order::whereDate('created_at', today()->subDays(1))->count();
        $chart->labels(['Yesterday', 'Today']);
        $chart->dataset('Number of Orders', 'line', [$yesterday_orders, $today_orders]);

        $chart2 = new FoodPopularity;

        //To get list of last 30 days
        $start = Carbon::today()->subDays(30);
        foreach (range(1, 30) as $i) {
            $dates[] = $start->addDays(1)->format('j/m');
        }
        $orders2 = collect([]);
        for ($i=30; $i>=0; $i--) {
            $orders2->push(Order::whereDate('created_at', today()->subDays($i))->count());
        }
        $chart2->labels($dates);
        $chart2->dataset('Number of Orders', 'line', $orders2);

        return view('manager.home', compact('chart','chart2'));
    }

}
