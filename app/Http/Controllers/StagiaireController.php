<?php

namespace App\Http\Controllers;

use App\Models\Coordonner;
use App\Models\Document;
use App\Models\InscripSolicit;
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

    public function addstagiaire(Request $request){
        $stagiaire = Stagiaire::create([
            'user_id' => 1,
            'nom_stagiaire' => $request->nom,
            'postnom_stag' => $request->postnom,
            'prenom_stag' => $request->prenom,
            'sexe_stg' => $request->sexe,
            'date_nais' => $request->datenaiss,
            'lieu_nais' => $request->lieuxnaiss,
            'pays_nais' => $request->paysnaiss,
            'nationalite' => $request->nationalite,
            'nom_conjoint' => $request->conjoint,
            'nbr_enfant' => $request->nbrenfant,
            'num_passeport' => $request->passeport,
            'num_carte_elect' => $request->carteElecteur,
            'num_carte_stag' => "Attente",
            'status_stag' => "Attente",
        ]);

        $stagiaire_id = $stagiaire->id;
        
        Coordonner::create([
            'stagiaire_id' => $stagiaire_id,
            'adresse_complete' => $request->adresse,
            'code_postal' => $request->codepostal,
            'email' => $request->email,
            'mobil' => $request->phone,
            'mobil_fixe' => $request->phonefixe,
            'pays' => $request->pays,
            'province' => $request->province,
            'district' => $request->district,
        ]);

        Document::create([
            'stagiaire_id' => $stagiaire_id,
            'photo_pass' => $request->photo,
            'attestation_diplome' => $request->diplome,
            'attestation_med' => $request->attmed,
            'attestation_nationalite' => $request->attnat,
            'bonne_vie_moeurs' => $request->bvm,
            'bulletins' => $request->bulletin,
            'bulletins2' => $request->bulletin2
        ]);

        InscripSolicit::create([
            'stagiaire_id' => $stagiaire_id,
            'filiere_id' => 1,
            'option_id' => 1
        ]);

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
