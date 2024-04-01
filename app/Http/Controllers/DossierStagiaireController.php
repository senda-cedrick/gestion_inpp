<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DossierStagiaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
