<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Categorie;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offre = DB::table('categories')
        ->join('offres', 'categories.id', '=', 'offres.categorie_id')
        ->select('*', 'offres.id as identifiant')
        ->where('valide',1)
        ->get();
        return view('frontend.offre.index', compact('offre'));
    }

    public function __invoke()
    {
        $offre = DB::table('categories')
        ->join('offres', 'categories.id', '=', 'offres.categorie_id')
        ->select('*', 'offres.id as identifiant')
        ->where('valide', 0)
        ->get();
        return view('frontend.offre.index', compact('offre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('frontend.offre.add', compact('categorie'));
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
            'categorie_id' => 'required|integer',
            'entreprise' => 'required|string',
            'titre' => 'required|string',
            'description' => 'required|string',
            'mission' => 'required|string',
            'profil' => 'required|string',
            'dossier' => 'required|string',
            'lien' => 'required|string',
            'lieu' => 'required|string',
            'date_limite' => 'required|string',
            
        ]);

        try {
            $data = new Offre();
            $data->categorie_id = $request->categorie_id;
            $data->entreprise = $request->entreprise;
            $data->titre = $request->titre;
            $data->description = $request->description;
            $data->mission = $request->mission;
            $data->profil = $request->profil;
            $data->dossier = $request->dossier;
            $data->lien = $request->lien;
            $data->lieu = $request->lieu;
            $data->date_lim = $request->date_limite;

            if ($request->valide) {
                $data->valide = $request->valide;
            }

            $data->save();
            return redirect()->back()->with('success','Offre ajouté avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        $offres = Offre::find($offre);
        return view('frontend.offre.show',compact('offres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit($offre)
    {
        $categorie = Categorie::all();
        $offres = Offre::find($offre);
        return view('frontend.offre.update', compact('categorie', 'offres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $offre)
    {
        $data = $request->validate([
            'categorie_id' => 'required|integer',
            'entreprise' => 'required|string',
            'titre' => 'required|string',
            'description' => 'required|string',
            'mission' => 'required|string',
            'profil' => 'required|string',
            'dossier' => 'required|string',
            'lien' => 'required|string',
            'lieu' => 'required|string',
            'date_limite' => 'required|string',
            
        ]);

        try {
            $data = Offre::find($offre);
            $data->categorie_id = $request->categorie_id;
            $data->entreprise = $request->entreprise;
            $data->titre = $request->titre;
            $data->description = $request->description;
            $data->mission = $request->mission;
            $data->profil = $request->profil;
            $data->dossier = $request->dossier;
            $data->lien = $request->lien;
            $data->lieu = $request->lieu;
            $data->date_lim = $request->date_limite;

            if ($request->valide) {
                $data->valide = $request->valide;
            }

            $data->update();
            return redirect()->back()->with('success','Offre modifié avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        try {
            $offre->delete();
            if ($offre == 1) {
                $success = true;
            } else {
                $success = true;
            }
            //  return response
            return response()->json([
                'success' => $success,
                'message' => $message,
            ]);
            return redirect()->back()->with('success','Offre supprimée avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }
}
