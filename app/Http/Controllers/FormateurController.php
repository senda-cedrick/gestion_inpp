<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Service;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $formateurs = Formateur::all();

        return view('formateur.formateur', compact('formateurs'));
    }

    public function addform()
    {
        $services = Service::all();
        return view('formateur.formateuradd', compact('services'));
    }

    public function addformateur(Request $request)
    {
        $formateur = new Formateur();
        $formateur->name = $request->nom;
        $formateur->postnom = $request->postnom;
        $formateur->prenom = $request->prenom;
        $formateur->genre = $request->sexe;
        $formateur->contact = $request->contact;
        $formateur->adresse = $request->adresse;
        $formateur->email = $request->email;
        $formateur->service_id = $request->service;
        $formateur->save();

        return redirect('formateur');
    }

    public function updateform(Request $request)
    {
        $services = Service::all();
        $formateur = Formateur::find($request->id);
        return view('formateur.formateurupdate', compact('services', 'formateur'));
    }

    public function updateProcess(Request $request)
    {
        $formateur = Formateur::find($request->id);
        $formateur->name = $request->nom;
        $formateur->postnom = $request->postnom;
        $formateur->prenom = $request->prenom;
        $formateur->genre = $request->sexe;
        $formateur->contact = $request->contact;
        $formateur->adresse = $request->adresse;
        $formateur->email = $request->email;
        $formateur->service_id = $request->service;
        $formateur->update();

        return redirect('formateur');
    }

    public function delete(Request $request)
    {
        $formateur = Formateur::find($request->id);
        $formateur->delete();

        return redirect()->back();
    }
}
