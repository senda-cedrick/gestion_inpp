<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index(){
        $stagiaires = Stagiaire::all();

        return view('stagiaire.stagiaire', compact('stagiaires'));
    }

    public function addform(){
        return view('stagiaire.stagiaireadd');
    }

    public function addoption(Request $request){
        $stagiaire = new Stagiaire();
        $stagiaire->nom_option = $request->name;
        $stagiaire->save();

        return redirect('stagiaire');
    }

    public function updateform(Request $request){
        $stagiaire = Stagiaire::find($request->id);
        return view('stagiaire.stagiaireupdate', compact('stagiaire'));
    }

    public function updateProcess(Request $request){
        $stagiaire = Stagiaire::find($request->id);
        $stagiaire->nom_option = $request->name;
        $stagiaire->update();

        return redirect('stagiaire');
    }

    public function delete(Request $request){
        $stagiaire = Stagiaire::find($request->id);
        $stagiaire->delete();

        return redirect()->back();
    }
}
