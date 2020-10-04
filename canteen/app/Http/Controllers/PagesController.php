<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Post;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Canteen';
        $foods = Food::where('featured', true)->orderBy('created_at','desc')->get();
        $posts = Post::orderBy('created_at','desc')->take(4)->get();
        return view('pages.index')->with('title',$title)->with('foods',$foods)->with('posts',$posts);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
}
