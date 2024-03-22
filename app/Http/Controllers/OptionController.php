<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Filiere;
=======
>>>>>>> 1a5d1b22 (Initial commit)
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index(){
        $options = Option::all();

        return view('option.option', compact('options'));
    }

<<<<<<< HEAD
    public function addform()
    {
        $filieres = Filiere::all();
        return view('option.optionadd', compact('filieres'));
=======
    public function addform(){
        return view('option.optionadd');
>>>>>>> 1a5d1b22 (Initial commit)
    }

    public function addoption(Request $request){
        $option = new Option();
<<<<<<< HEAD
        $option->filiere_id = $request->filiere_id;
=======
>>>>>>> 1a5d1b22 (Initial commit)
        $option->nom_option = $request->name;
        $option->save();

        return redirect('option');
    }

    public function updateform(Request $request){
        $option = Option::find($request->id);
<<<<<<< HEAD
        $filieres = Filiere::all();
        return view('option.optionupdate', compact('option', 'filieres'));
=======
        return view('option.optionupdate', compact('option'));
>>>>>>> 1a5d1b22 (Initial commit)
    }

    public function updateProcess(Request $request){
        $option = option::find($request->id);
<<<<<<< HEAD
        $option->filiere_id = $request->filiere_id;
=======
>>>>>>> 1a5d1b22 (Initial commit)
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
