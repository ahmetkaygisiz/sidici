<?php

namespace App\Http\Controllers;

use App\Category;
use App\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class  FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = film::all();
        return view('admin.film.index',compact('films'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = Category::pluck('name','id');

        return view('admin.film.create', compact('categories')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image','image_banner');

//        validation
        $this->validate($request,[
            'price'=>'required',
            'name'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000',
            'image_banner'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        $image_banner = $request->image_banner;
        if($image_banner){
            $imageBName=$image_banner->getClientOriginalName();
            $image_banner->move('images',$imageBName);
            $formInput['image_banner']=$imageBName;
        }


        film::create($formInput);
        return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $search = $request->search;
        $results = film::where('name','like',$search.'%')->get();

        return view('front.search',compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        film::destroy($id);

        return back();
    }
}
