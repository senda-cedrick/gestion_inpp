<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
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
        $document->update();

        return redirect('document');
    }

    public function delete(Request $request){
        $document = Document::find($request->id);
        $document->delete();

        return redirect()->back();
    }
}
