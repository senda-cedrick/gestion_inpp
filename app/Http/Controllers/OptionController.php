<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $options = Option::all();

        return view('option.option', compact('options'));
    }

    public function addform()
    {
        $filieres = Filiere::all();
        return view('option.optionadd', compact('filieres'));
    }

    public function addoption(Request $request){
        $option = new Option();
        $option->filiere_id = $request->filiere_id;
        $option->nom_option = $request->name;
        $option->save();

        return redirect('option');
    }

    public function updateform(Request $request){
        $option = Option::find($request->id);
        $filieres = Filiere::all();
        return view('option.optionupdate', compact('option', 'filieres'));
    }

    public function updateProcess(Request $request){
        $option = option::find($request->id);
        $option->filiere_id = $request->filiere_id;
        $option->nom_option = $request->name;
        $option->update();

        return redirect('option');
    }

    public function delete(Request $request){
        $option = Option::find($request->id);
        $option->delete();

        return redirect()->back();
    }
}
