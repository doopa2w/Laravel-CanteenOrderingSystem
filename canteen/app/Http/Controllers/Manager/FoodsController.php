<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
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
        $this->middleware('manager.auth:manager');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::where('manager_id', Auth::guard('manager')->id())->paginate(10);
        return view('manager.foods.index')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required|numeric',
            'featured' => 'boolean',
            //Remember do for update function also
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // File Upload Handler
        if($request->hasFile('cover_image')) {
            $fullFilename = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fullFilename, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $storeFileName= $filename.'_'.time().'.'.$ext;
            $image_resize = Image::make($request->file('cover_image')->getRealPath());
            $image_resize->fit(640, 420);
            Storage::put('public/cover_images/'.$storeFileName, $image_resize->stream());
        } else {
            $storeFileName = 'noimage.jpg';
        }

        // Create Food
        $food = new Food;
        $food->category_id = $request->input('category_id');
        $food->title = $request->input('title');
        $food->desc = $request->input('desc');
        $food->price = $request->input('price');
        $food->featured = $request->input('featured');
        //Remember do for update function also
        $food->manager_id = Auth::guard('manager')->id();
        $food->cover_image = $storeFileName;
        $food->save();

        return redirect('/manager/foods')->with('success', 'Food Created');
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

        return view('manager.foods.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);

        // Check for correct manager
        if(Auth::guard('manager')->id() !== $food->manager->id){
            return redirect('/manager/foods')->with('error', 'Unauthorized Page');
        }

        return view('manager.foods.edit')->with('food', $food);
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
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required|numeric',
            'featured' => 'boolean'
        ]);

        // File Upload Handler
        if($request->hasFile('cover_image')) {
            $fullFilename = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fullFilename, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $storeFileName= $filename.'_'.time().'.'.$ext;
            $image_resize = Image::make($request->file('cover_image')->getRealPath());
            $image_resize->fit(600, 360);
            Storage::put('public/cover_images/'.$storeFileName, $image_resize->stream());
        }

        // Create Food
        $food = Food::find($id);
        $food->category_id = $request->input('category_id');
        $food->title = $request->input('title');
        $food->desc = $request->input('desc');
        $food->price = $request->input('price');
        $food->featured = $request->input('featured');
        if($request->hasFile('cover_image')){
            $food->cover_image = $storeFileName;
        }
        $food->save();

        return redirect('/manager/foods')->with('success', 'Food Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);

        // Check for correct manager
        if(Auth::guard('manager')->id() !== $food->manager->id){
            return redirect('/manager/foods')->with('error', 'Unauthorized Page');
        }

        if($food->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$food->cover_image);
        }//got error when delete cause it cant find that path
        
        $food->delete();
        return redirect('/manager/foods')->with('success', 'Food Removed');
    }

}
