<?php

namespace App\Http\Controllers;

use App\Models\Parametre;
use Exception;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametres = Parametre::all();
        return view('frontend.parametre.index', compact('parametres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.parametre.add');
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
            'description' => 'required|string',
            'email' => 'required|string',
            'numero' => 'required|string',
            'adresse' => 'required|string',
            'localisation' => 'required|string',
        ]);

        try {
            $data = new Parametre();
            $data->description = $request->description;
            $data->email = $request->email;
            $data->numero = $request->numero;
            $data->adresse = $request->adresse;
            $data->localisation = $request->localisation;
            $data->save();
            return redirect()->back()->with('success','Contact ajouté avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function show(Parametre $parametre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function edit($parametre)
    {
        $parametres = Parametre::find($parametre);
        return view('frontend.parametre.update', compact('parametres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $parametre)
    {
        $data = $request->validate([
            'description' => 'required|string',
            'email' => 'required|string',
            'numero' => 'required|string',
            'adresse' => 'required|string',
            'localisation' => 'required|string',
        ]);

        try {
            $data = Parametre::find($parametre);
            $data->description = $request->description;
            $data->email = $request->email;
            $data->numero = $request->numero;
            $data->adresse = $request->adresse;
            $data->localisation = $request->localisation;
            $data->update();
            return redirect()->back()->with('success','Contact modifié avec succes');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parametre $parametre)
    {
        //
    }
}
