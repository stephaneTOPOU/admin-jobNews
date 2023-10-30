<?php

namespace App\Http\Controllers;

use App\Models\BannerSearch;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerSearches = BannerSearch::all();
        return view('frontend.banner_search.index', compact('bannerSearches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.banner_search.add');
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
            $data = new BannerSearch();
            // if ($request->image){
            //     $filename = time().rand(1,50).'.'.$request->image->extension();
            //     $img = $request->file('image')->storeAs('banner', $filename, 'public');
            //     $data->image = $img;
            //     }
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
                Storage::disk('ftp')->put($filenametostore, fopen($request->file('image'), 'r+'));

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
     * @param  \App\Models\BannerSearch  $bannerSearch
     * @return \Illuminate\Http\Response
     */
    public function show(BannerSearch $bannerSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerSearch  $bannerSearch
     * @return \Illuminate\Http\Response
     */
    public function edit($bannerSearch)
    {
        $bannerSearches = BannerSearch::find($bannerSearch);
        return view('frontend.banner_search.update', compact('bannerSearches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerSearch  $bannerSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bannerSearch)
    {
        $data = $request->validate([
            'image' => 'required|file'
        ]);
        
        try {
            $data = BannerSearch::find($bannerSearch);
            // if ($request->image){
            //     $filename = time().rand(1,50).'.'.$request->image->extension();
            //     $img = $request->file('image')->storeAs('banner', $filename, 'public');
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
                Storage::disk('ftp')->put($filenametostore, fopen($request->file('image'), 'r+'));

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
     * @param  \App\Models\BannerSearch  $bannerSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerSearch $bannerSearch)
    {
        try {
            $bannerSearch->delete();
            // check data deleted or not
            if ($bannerSearch == 1) {
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
