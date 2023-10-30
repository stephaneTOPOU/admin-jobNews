<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        $nbcategorie = Categorie::count();

        $nboffre = DB::table('categories')
        ->join('offres', 'categories.id', '=', 'offres.categorie_id')
        ->select('*', 'offres.id as identifiant')
        ->where('valide',1)
        ->count();

        $nonvld = DB::table('categories')
        ->join('offres', 'categories.id', '=', 'offres.categorie_id')
        ->select('*', 'offres.id as identifiant')
        ->where('valide',0)
        ->count();

        return view('frontend.home.home', compact('nboffre','nonvld','nbcategorie'));
    }
}
