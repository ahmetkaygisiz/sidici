<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('front.faq',compact('faqs'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        //
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
        //
    }
}
