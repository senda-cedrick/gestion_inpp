<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\InscripSolicit;
use App\Models\Option;
use Illuminate\Http\Request;

class InscripSolicitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $inscriptions = InscripSolicit::all();

        return view('inscription.inscription', compact('inscriptions'));
    }

    public function updateform(Request $request){
        $inscription = InscripSolicit::find($request->id);
        $filieres = Filiere::all();
        $options = Option::all();
        
        return view('inscription.inscriptionupdate', compact('inscription', 'filieres', 'options'));
    }

    public function updateProcess(Request $request){
        $inscription = InscripSolicit::find($request->id);
        $inscription->filiere_id = $request->filiere;
        $inscription->option_id = $request->option;
        $inscription->update();

        return redirect('inscription');
    }

    public function delete(Request $request){
        $inscription = InscripSolicit::find($request->id);
        $inscription->delete();

        return redirect()->back();
    }

    public function print(Request $request)
    {
        $filiere = $request->filiere;
        $option = $request->option;
        $ddebut = $request->ddebut;
        $dfin = $request->dfin;

        $inscriptions = InscripSolicit::where('filiere_id', $request->filiere)
            ->where('option_id', $request->option)
            ->where('created_at', '>=', $request->ddebut . " 00:00:00")
            ->where('created_at', '<=', $request->dfin . " 18:00:59")->get();

        return view('stagiaire.rapport', compact('inscriptions'));
    }
}
