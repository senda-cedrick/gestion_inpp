<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $countStgNv = Document::whereNull('preuve_paiement')->count();
        $countStgV = Document::whereNotNull('preuve_paiement')->count();
        $stagiaires = Stagiaire::latest()->paginate(20);
        $documents = Document::all();
        return view('welcome', compact('countStgNv', 'countStgV', 'stagiaires', 'documents'));
    }
}
