<?php

namespace App\Http\Controllers;

use App\Models\Coordonner;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class CoordonnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $coordonnees = Coordonner::all();
        $stagiaires = Stagiaire::all();

        return view('coordonnee.coordonnee', compact('coordonnees', 'stagiaires'));
    }

    public function updateform(Request $request){
        $coordonnee = Coordonner::find($request->id);
        $stagiaires = Stagiaire::all();
        return view('coordonnee.coordonneeupdate', compact('coordonnee', 'stagiaires'));
    }

    public function updateProcess(Request $request){
        $option = Coordonner::find($request->id);
        $option->adresse_complete = $request->adresse;
        $option->code_postal = $request->codepostal;
        $option->email = $request->email;
        $option->mobil = $request->phone;
        $option->mobil_fixe = $request->phonefixe;
        $option->code_postal = $request->codepostal;
        $option->pays = $request->pays;
        $option->province = $request->province;
        $option->district = $request->district;
        $option->update();

        return redirect('coordonnee');
    }

    public function delete(Request $request){
        $option = Coordonner::find($request->id);
        $option->delete();

        return redirect()->back();
    }
}
