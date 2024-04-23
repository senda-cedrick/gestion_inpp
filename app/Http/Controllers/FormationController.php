<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Formateur;
use App\Models\Formation;
use App\Models\InscripSolicit;
use App\Models\Option;
use App\Models\Vacation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $formations = Formation::all();

        return view('formation.formation', compact('formations'));
    }

    public function addform()
    {
        $filieres = Filiere::all();
        $options = Option::all();
        $formateurs = Formateur::all();
        $vacations = Vacation::all();

        return view('formation.formationadd', compact('filieres', 'options', 'formateurs', 'vacations'));
    }

    public function option($filiereId)
    {
        $options = Option::where('filiere_id', $filiereId)->get();
        return response()->json($options);
    }

    public function addformation(Request $request)
    {
        $formation = new Formation();
        $formation->filiere_id = $request->filiere_id;
        $formation->option_id = $request->option_id;
        $formation->formateur_id = $request->formateur_id;
        $formation->vacation_id = $request->vacation_id;
        $formation->dateDebut = $request->ddebut;
        $formation->dateFin = $request->dfin;
        $formation->nbrStg = 0;
        $formation->save();

        return redirect('formation');
    }

    public function updateform(Request $request)
    {
        $formation = Formation::find($request->id);
        $filieres = Filiere::all();
        $options = Option::all();
        $formateurs = Formateur::all();
        return view('formation.formationupdate', compact('filieres', 'options', 'formateurs', 'formation'));
    }

    public function updateProcess(Request $request)
    {
        $formation = Formation::find($request->id);
        $formation->filiere_id = $request->filiere_id;
        $formation->option_id = $request->option_id;
        $formation->formateur_id = $request->formateur_id;
        $formation->vacation_id = $request->vacation_id;
        $formation->dateDebut = $request->ddebut;
        $formation->dateFin = $request->dfin;
        $formation->nbrStg = 0;
        $formation->update();

        return redirect('formation');
    }

    public function delete(Request $request)
    {
        $formation = Formation::find($request->id);
        $formation->delete();

        return redirect()->back();
    }

    public function liste(Request $request)
    {
        $formation = Formation::find($request->id);
        $option = $formation->option_id;

        $listes = InscripSolicit::where('option_id', $option)
            ->join('stagiaires', 'inscrip_solicits.stagiaire_id', '=', 'stagiaires.id')
            ->where('stagiaires.status_stag', '=', 'Valide')
            ->get();
        return view('formation.liste', compact('listes'));
    }
}
