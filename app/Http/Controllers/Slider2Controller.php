<?php

namespace App\Http\Controllers;

use App\Models\Slider2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Slider2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider2::all();
        return view('frontend.slider2.index', compact('slider'));
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
        $data = $request->validate([
            'image' => 'required|file'
        ]);
        
        try {
            $data = new Slider2();
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
    public function edit($slider2)
    {
        $slider = Slider2::find($slider2);
        return view('frontend.slider2.update', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider2  $slider2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slider2)
    {
            $data = $request->validate([
                'image' => 'required|file'
            ]);
            
            try {
                $data = Slider2::find($slider2);
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
     * @param  \App\Models\Slider2  $slider2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider2 $slider2)
    {
        try {
            $slider2->delete();
            if ($slider2 == 1) {
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
