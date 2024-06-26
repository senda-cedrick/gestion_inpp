<?php

namespace App\Http\Controllers;

use App\Models\Coordonner;
use App\Models\Document;
use App\Models\Filiere;
use App\Models\IdCounter;
use App\Models\InscripSolicit;
use App\Models\Option;
use App\Models\Stagiaire;
use App\Models\Vacation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StagiaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $stagiaires = Stagiaire::all();
        $data['filieres'] = Filiere::get(["nom_filiere", "id"]);
        $options = Option::all();
        $documents = Document::latest()->paginate(20);

        return view(
            'stagiaire.stagiaire',
            $data,
            compact('stagiaires', 'documents', 'options')
        );
    }

    public function addform()
    {
        $filieres = Filiere::all();
        $options = Option::all();
        $vacations = Vacation::all();
        return view('stagiaire.stagiaireadd', compact('filieres', 'options', 'vacations'));
    }

    public function option($filiereId)
    {
        $options = Option::where('filiere_id', $filiereId)->get();
        return response()->json($options);
    }

    public function addstagiaire(Request $request)
    {
        $year = Carbon::now()->format('y');
        $month = Carbon::now()->format('m');
        $day = Carbon::now()->format('d');
        $option = Option::whereKey($request->option)->first();
        $prefix = substr($option->nom_option, 0, 3);
        $idCounter = IdCounter::firstOrCreate(['current_year' => $year]);
        $idCounter->counter++;
        $idCounter->save();
        $numCartStg = $prefix . $year . $month . $day . str_pad($idCounter->counter, 5, '0', STR_PAD_LEFT);

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
            'num_carte_stag' => $numCartStg,
            'vacation_id' => $request->vacation,
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
        
        return view('stagiaire.stagiaireupdate', compact('stagiaire'));
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

        return redirect('stagiaire');
    }

    public function delete(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);
        $stagiaire->delete();

        return redirect()->back();
    }
}
