<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $documents = Document::all();

        return view('document.document', compact('documents'));
    }

    public function updateform(Request $request){
        $document = Document::find($request->id);
        
        return view('document.documentupdate', compact('document'));
    }

    public function updateProcess(Request $request){
        $document = Document::find($request->id);
        $document->photo_pass = $request->photo;
        $document->attestation_diplome = $request->diplome;
        $document->bulletins = $request->bulletin;
        $document->bulletins2 = $request->bulletin2;
        $document->attestation_med = $request->attmed;
        $document->attestation_nationalite = $request->attnat;
        $document->bonne_vie_moeurs = $request->bvm;
        $document->preuve_paiement = $request->prpaiement;
        $document->update();

        $stagiaire = Stagiaire::find($document->stagiaire_id);
        if ($request->prpaiement == null) {
            $stagiaire->status_stag = 'EN ATTENTE'; 
        } else {
            $stagiaire->status_stag = 'Valide';
        }
        
        $stagiaire->update();

        return redirect('document');
    }

    public function delete(Request $request){
        $document = Document::find($request->id);
        $document->delete();

        return redirect()->back();
    }
}
