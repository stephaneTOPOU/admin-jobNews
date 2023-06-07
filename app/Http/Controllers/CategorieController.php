<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('frontend.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.categorie.add');
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
            'nom' => 'required|string'
        ]);

        try {
            $data = new Categorie();
            $data->nom = $request->nom;
            $data->save();
            return redirect()->back()->with('success','Nouvelle catégorie ajoutée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($categorie)
    {
        $categories = Categorie::find($categorie);
        return view('frontend.categorie.update', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categorie)
    {
        $data = $request->validate([
            'nom' => 'required|string'
        ]);

        try {
            $data = Categorie::find($categorie);
            $data->nom = $request->nom;
            $data->update();
            return redirect()->back()->with('success','Catégorie modifiée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        try {
            $categorie->delete();
            return redirect()->back()->with('success','Categorie supprimée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }
}
