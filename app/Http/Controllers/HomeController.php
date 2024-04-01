<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countStgNv = Document::whereNull('preuve_paiement')->count();
        $countStgV = Document::whereNotNull('preuve_paiement')->count();
        $stagiaires = Stagiaire::latest()->paginate(20);
        $documents = Document::latest()->paginate(20);
        return view('home', compact('countStgNv', 'countStgV', 'stagiaires', 'documents'));
    }
}
