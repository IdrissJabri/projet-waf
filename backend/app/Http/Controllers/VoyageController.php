<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use App\Models\Voyage;

use Illuminate\Support\Facades\DB;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $voyage = DB::table('voyages')

            ->join('villes', 'villes.id', '=', 'voyages.ville_id')
            ->join('agences', 'agences.id', '=', 'voyages.agence_id')
            ->join('places', 'places.id', '=', 'voyages.places_id')
            ->select('voyages.titre', 'voyages.depart', 'voyages.ligne-fr', 'voyages.ligne-ar', 'voyages.active', 'villes.nom_fr', 'villes.nom_ar', 'villes.prix', 'agences.nom_fr', 'agences.nom_ar', 'agences.path')
            ->get();  
        // $voyage = Voyage::all();  
        return  response()->json($voyage, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }



    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $ville = Ville::findOrFail($id);
        $name = $ville->nom_fr;
        $voyages = DB::table('voyages')
            ->join('villes', 'villes.id', '=', 'voyages.ville_id')
            ->join('agences', 'agences.id', '=', 'voyages.agence_id')
            ->join('places', 'places.id', '=', 'voyages.places_id')
            ->select('voyages.id','voyages.titre', 'voyages.depart', 'voyages.ligne_fr', 'voyages.ligne_ar', 'voyages.active', 'villes.nom_fr', 'villes.nom_ar', 'villes.prix', 'agences.nom_fr', 'agences.nom_ar', 'agences.path')
            ->where('voyages.ligne_fr', 'like', '%' . $name . '%')
            ->where('voyages.active', '=', '1')


            ->get();
        return  response()->json($voyages, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
