<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index(){
        $filieres = Filiere::all();

        return view('filiere.filiere', compact('filieres'));
    }

<<<<<<< HEAD
    public function addform()
    {
=======
    public function addform(){
>>>>>>> 1a5d1b22 (Initial commit)
        return view('filiere.filiereadd');
    }

    public function addfiliere(Request $request){
        $filiere = new Filiere();
        $filiere->nom_filiere = $request->name;
        $filiere->save();

        return redirect('filiere');
    }

    public function updateform(Request $request){
        $filiere = Filiere::find($request->id);
        return view('filiere.filiereupdate', compact('filiere'));
    }

    public function updateProcess(Request $request){
        $filiere = Filiere::find($request->id);
        $filiere->nom_filiere = $request->name;
        $filiere->update();

        return redirect('filiere');
    }

    public function delete(Request $request){
        $filiere = Filiere::find($request->id);
        $filiere->delete();

        return redirect()->back();
    }
}
