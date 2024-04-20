<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Matiere;
use App\Models\Option;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $matieres = Matiere::all();

        return view('matiere.matiere', compact('matieres'));
    }

    public function addform()
    {
        $options = Option::all();
        $formateurs = Formateur::all();

        return view('matiere.matiereadd', compact('options', 'formateurs'));
    }

    public function addmatiere(Request $request){
        $matiere = new Matiere();
        $matiere->libCours = $request->libCours;
        $matiere->ponderation = $request->ponderation;
        $matiere->option_id = $request->option;
        $matiere->formateur_id = $request->formateur;
        $matiere->save();

        return redirect('matiere');
    }

    public function updateform(Request $request){
        $matiere = Matiere::find($request->id);
        $formateurs = Formateur::all();
        $options = Option::all();
        return view('matiere.matiereupdate', compact('matiere', 'options', 'formateurs'));
    }

    public function updateProcess(Request $request){
        $matiere = Matiere::find($request->id);
        $matiere->libCours = $request->libCours;
        $matiere->ponderation = $request->ponderation;
        $matiere->option_id = $request->option;
        $matiere->formateur_id = $request->formateur;
        $matiere->update();

        return redirect('matiere');
    }

    public function delete(Request $request){
        $matiere = Matiere::find($request->id);
        $matiere->delete();

        return redirect()->back();
    }
}
