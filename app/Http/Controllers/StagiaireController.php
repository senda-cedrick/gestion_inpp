<?php

namespace App\Http\Controllers;

use App\Models\Coordonner;
use App\Models\Document;
use App\Models\Filiere;
use App\Models\InscripSolicit;
use App\Models\Option;
use App\Models\Stagiaire;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();

        return view('stagiaire.stagiaire', compact('stagiaires'));
    }

    public function addform()
    {
        $filieres = Filiere::all();
        $options = Option::all();
        return view('stagiaire.stagiaireadd', compact('filieres', 'options'));
    }

    public function addstagiaire(Request $request)
    {
        $year = Carbon::now()->format('y');
        $month = Carbon::now()->format('m');
        $day = Carbon::now()->format('d');
        $option = Option::whereKey($request->option)->first();
        $prefix = substr($option->nom_option, 0, 3);
        $random = Str::random(5);

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
            'num_carte_stag' => $prefix . $year . $month . $day . $random,
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
            'filiere_id' => $request->filiere,
            'option_id' => $request->option
        ]);

        return redirect('stagiaire');
    }

    public function updateform(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);
        $coordonnes = Coordonner::where('stagiaire_id', $request->id)->first();
        $insc_filiere = InscripSolicit::where('stagiaire_id', $request->id)->first();
        $documents = Document::where('stagiaire_id', $request->id)->first();
        $filieres = Filiere::all();
        $options = Option::all();
        return view('stagiaire.stagiaireupdate', compact('stagiaire', 'filieres', 'options', 'coordonnes', 'insc_filiere', 'documents'));
    }

    public function updateProcess(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);
        $stagiaire->user_id = 1;
        $stagiaire->nom_stagiaire = $request->nom;
        $stagiaire->postnom_stag = $request->postnom;
        $stagiaire->prenom_stag = $request->prenom;
        $stagiaire->sexe_stg = $request->sexe;
        $stagiaire->date_nais = $request->datenaiss;
        $stagiaire->lieu_nais = $request->lieuxnaiss;
        $stagiaire->pays_nais = $request->paysnaiss;
        $stagiaire->nationalite = $request->nationalite;
        $stagiaire->nom_conjoint = $request->conjoint;
        $stagiaire->nbr_enfant = $request->nbrenfant;
        $stagiaire->num_passeport = $request->passeport;
        $stagiaire->num_carte_elect = $request->carteElecteur;
        $stagiaire->update();

        $stagiaire_id = $stagiaire->id;

        $coordonees = Coordonner::where('stagiaire_id', $request->id)->first();
        $coordonees->stagiaire_id = $stagiaire_id;
        $coordonees->adresse_complete = $request->adresse;
        $coordonees->code_postal = $request->codepostal;
        $coordonees->email = $request->email;
        $coordonees->mobil = $request->phone;
        $coordonees->mobil_fixe = $request->phonefixe;
        $coordonees->pays = $request->pays;
        $coordonees->province = $request->province;
        $coordonees->district = $request->district;
        $coordonees->update();

        $documents = Document::where('stagiaire_id', $request->id)->first();
        $documents->stagiaire_id = $stagiaire_id;
        $documents->photo_pass = $request->photo;
        $documents->attestation_diplome = $request->diplome;
        $documents->attestation_med = $request->attmed;
        $documents->attestation_nationalite = $request->attnat;
        $documents->bonne_vie_moeurs = $request->bvm;
        $documents->bulletins = $request->bulletin;
        $documents->bulletins2 = $request->bulletin2;
        $documents->update();

        $inscription_sol = InscripSolicit::where('stagiaire_id', $request->id)->first();
        $inscription_sol->stagiaire_id = $stagiaire_id;
        $inscription_sol->filiere_id = $request->filiere;
        $inscription_sol->option_id = $request->option;
        $inscription_sol->update();

        return redirect('stagiaire');
        //$stagiaire->update();
    }

    public function delete(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);
        $stagiaire->delete();

        return redirect()->back();
    }
}
