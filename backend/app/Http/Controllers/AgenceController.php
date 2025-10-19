<?php

namespace App\Http\Controllers;

use App\Models\Agence;

use Illuminate\Http\Request;

class AgenceController extends Controller
{

    public function index()
    {
        //
        $agences = Agence::all();
        return  response()->json($agences, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function upload(Request $request)
    {

        $agence = new Agence;
        $agence->nom_fr = $request->nom_fr;
        $agence->nom_ar = $request->nom_ar;

        if ($request->hasFile('path')) {
            $uniqueid = uniqid();

            $extension = $request->file('path')->getClientOriginalExtension();
            $name = time() . '_' . $uniqueid . '.' . $extension;

            // $new_name = rand() . '.' . $agence->path->getClientOriginalExtension();
            $imagepath = url('/storage/photos/' . $name);
            $path = $request->file('path')->storeAs('/public/photos', $name);
            if ($path) {
                $agence->path = $imagepath;
            }

            $agence->save();
        }
    }
}
