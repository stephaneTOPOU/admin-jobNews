<?php

namespace App\Http\Controllers;

use App\Models\About;
use Exception;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('frontend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.about.add');
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
            'apropos' => 'required|string',
            'description' => 'required|string',
            'mission1' => 'required|string',
            'mission2' => 'required|string',
            'mission3' => 'required|string',
        ]);

        try {
            $data = new About();
            $data->apropos = $request->apropos;
            $data->description = $request->description;
            $data->mission1 = $request->mission1;
            $data->mission2 = $request->mission2;
            $data->mission3 = $request->mission3;
            $data->save();
            return redirect()->back()->with('success','Informations ajoutées avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($about)
    {
        $abouts = About::find($about);
        return view('frontend.about.update', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $about)
    {
        $data = $request->validate([
            'apropos' => 'required|string',
            'description' => 'required|string',
            'mission1' => 'required|string',
            'mission2' => 'required|string',
            'mission3' => 'required|string',
        ]);

        try {
            $data = About::find($about);
            $data->apropos = $request->apropos;
            $data->description = $request->description;
            $data->mission1 = $request->mission1;
            $data->mission2 = $request->mission2;
            $data->mission3 = $request->mission3;
            $data->update();
            return redirect()->back()->with('success','Informations modifiées avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
