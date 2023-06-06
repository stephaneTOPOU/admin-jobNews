<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('frontend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.banner.add');
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
            $data = new banner();
            if ($request->image){
                $filename = time().rand(1,50).'.'.$request->image->extension();
                $img = $request->file('image')->storeAs('banner', $filename, 'public');
                $data->image = $img;
                $data->save();
                return redirect()->back()->with('success','Nouvelle image ajoutée avec succes');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($banner)
    {
        $banners = Banner::find($banner);
        return view('frontend.banner.update', compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $banner)
    {
        $data = $request->validate([
            'image' => 'required|file'
        ]);
        
        try {
            $data = Banner::find($banner);
            if ($request->image){
                $filename = time().rand(1,50).'.'.$request->image->extension();
                $img = $request->file('image')->storeAs('banner', $filename, 'public');
                $data->image = $img;
                $data->update();
                return redirect()->back()->with('success','Nouvelle image ajoutée avec succes');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        try {
            $banner->delete();
            return redirect()->back()->with('success','Image supprimée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }
}
