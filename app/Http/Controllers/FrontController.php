<?php

namespace App\Http\Controllers;

use App\Category;
use App\film;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        $films = film::where('id', '>', '0')->orderBy('created_at', 'desc')->take(11)->get();
        $categories = Category::all();

        return view('front.home',compact(['categories','films']));
    }

    public function movie($id){
        $film = film::find($id);
        return view('front.movie',compact('film'));
    }

    public function movies(){
        $films = film::all();
        return view('front.movies',compact('films'));
    }

    public function genres($id){
        $films = film::where('category_id', $id)->orderBy('created_at', 'desc')->get();
        return view('front.genres',compact($films));
    }

    public function contact(){
        return view('front.contact');
    }

    public function garanti(){
        return view('front.garanti');
    }

    public function iade(){
        return view('front.iade');
    }
    public function blogSingle(){
        return view('front.blogSingle');
    }
}
