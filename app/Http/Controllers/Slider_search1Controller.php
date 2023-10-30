<?php

namespace App\Http\Controllers;

use App\Models\SliderSearch1;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Slider_search1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderSearch = SliderSearch1::all();
        return view('frontend.sliderSearch1.index', compact('sliderSearch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.sliderSearch1.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|file'
        ]);
        
        try {
            $data = new SliderSearch1();
            // if ($request->image){
            //     $filename = time().rand(1,50).'.'.$request->image->extension();
            //     $img = $request->file('image')->storeAs('slider', $filename, 'public');
            //     $data->image = $img;
            // }
            if ($request->hasFile('image') ) {

                //get filename with extension
                $filenamewithextension = $request->file('image')->getClientOriginalName();
        
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $request->file('image')->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;

                //Upload File to external server
                Storage::disk('ftp1')->put($filenametostore, fopen($request->file('image'), 'r+'));

                //Upload name to database
                $data->image = $filenametostore;
            }
            $data->save();
                return redirect()->back()->with('success','Nouvelle image ajoutée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SliderSearch1  $sliderSearch1
     * @return \Illuminate\Http\Response
     */
    public function show(SliderSearch1 $sliderSearch1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SliderSearch1  $sliderSearch1
     * @return \Illuminate\Http\Response
     */
    public function edit($sliderSearch1)
    {
        $sliderSearch = SliderSearch1::find($sliderSearch1);
        return view('frontend.sliderSearch1.update', compact('sliderSearch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SliderSearch1  $sliderSearch1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sliderSearch1)
    {
        $data = $request->validate([
            'image' => 'required|file'
        ]);
        
        try {
            $data = SliderSearch1::find($sliderSearch1);
            // if ($request->image){
            //     $filename = time().rand(1,50).'.'.$request->image->extension();
            //     $img = $request->file('image')->storeAs('slider', $filename, 'public');
            //     $data->image = $img;
            // }
            if ($request->hasFile('image') ) {

                //get filename with extension
                $filenamewithextension = $request->file('image')->getClientOriginalName();
        
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        
                //get file extension
                $extension = $request->file('image')->getClientOriginalExtension();
        
                //filename to store
                $filenametostore = $filename.'_'.uniqid().'.'.$extension;

                //Upload File to external server
                Storage::disk('ftp1')->put($filenametostore, fopen($request->file('image'), 'r+'));

                //Upload name to database
                $data->image = $filenametostore;
            }
            $data->update();
                return redirect()->back()->with('success','Image modifiée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SliderSearch1  $sliderSearch1
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderSearch1 $sliderSearch1)
    {
        try {
            $sliderSearch1->delete();
            if ($sliderSearch1 == 1) {
                $success = true;
            } else {
                $success = true;
            }
            //  return response
            return response()->json([
                'success' => $success,
                'message' => $message,
            ]);
            return redirect()->back()->with('success','Image supprimée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }
}
