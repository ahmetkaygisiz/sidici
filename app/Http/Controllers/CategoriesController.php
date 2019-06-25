<?php

namespace App\Http\Controllers;

use App\Category;
use App\film;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        Category::create($request->all());
        return  back();
    }
    public function show($id)
    {
        $films  = Category::find($id)->products;
        $categories=Category::all();

        return view('admin.category.index',compact(['categories','films']));
     }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}

