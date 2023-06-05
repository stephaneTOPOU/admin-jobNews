<?php

namespace App\Http\Controllers;

use App\Models\Slider2;
use Illuminate\Http\Request;

class Slider2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.slider2.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.slider2.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider2  $slider2
     * @return \Illuminate\Http\Response
     */
    public function show(Slider2 $slider2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider2  $slider2
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider2 $slider2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider2  $slider2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider2 $slider2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider2  $slider2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider2 $slider2)
    {
        //
    }
}