<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuteurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
