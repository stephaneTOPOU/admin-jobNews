<?php

namespace App\Http\Controllers;

use App\Models\Slider1;
use Illuminate\Http\Request;

class Slider1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider1::all();
        return view('frontend.slider1.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.slider1.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $data = $request->validate([
                'image' => 'required|file'
            ]);
            
            try {
                $data = new Slider1();
                if ($request->image){
                    $filename = time().rand(1,50).'.'.$request->image->extension();
                    $img = $request->file('image')->storeAs('slider', $filename, 'public');
                    $data->image = $img;
                    $data->save();
                    return redirect()->back()->with('success','Nouvelle image ajoutée avec succes');
                }
            } catch (Exception $e) {
                return redirect()->back()->with('success',$e->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider1  $slider1
     * @return \Illuminate\Http\Response
     */
    public function show(Slider1 $slider1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider1  $slider1
     * @return \Illuminate\Http\Response
     */
    public function edit($slider1)
    {
        $slider = Slider1::find($slider1);
        return view('frontend.slider1.update', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider1  $slider1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slider1)
    {
        $data = $request->validate([
            'image' => 'required|file'
        ]);
        
        try {
            $data = Slider1::find($slider1);
            if ($request->image){
                $filename = time().rand(1,50).'.'.$request->image->extension();
                $img = $request->file('image')->storeAs('slider', $filename, 'public');
                $data->image = $img;
                $data->update();
                return redirect()->back()->with('success','Image modifiée avec succes');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider1  $slider1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider1 $slider1)
    {
        try {
            $slider1->delete();
            return redirect()->back()->with('success','Image supprimée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }
}
