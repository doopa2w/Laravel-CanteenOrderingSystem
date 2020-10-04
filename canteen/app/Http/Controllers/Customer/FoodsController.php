<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;

class FoodsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customer.auth:customer', ['except' => ['index', 'show', 'showCat']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('created_at','desc')->paginate(6);
        $foods_slide = Food::all();
        return view('customer.foods.index')->with('foods', $foods)->with('foods_slide', $foods_slide);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);
        return view('customer.foods.show')->with('food', $food);
    }

    public function showCat($category)
    {
        $category_id = 0;
        if ($category == "western") $category_id = 1;
        if ($category == "local") $category_id = 2;
        
        $foods = Food::where('category_id', $category_id)->paginate(9);
        return view('customer.foods.index')->with('foods', $foods);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $foods = Food::where('name', 'Like', "%$query%")->get();
        return view('search-results')->with('foods', '$foods');
    }
}
