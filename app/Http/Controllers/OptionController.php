<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index(){
        $options = Option::all();

        return view('option.option', compact('options'));
    }

    public function addform(){
        return view('option.optionadd');
    }

    public function addoption(Request $request){
        $option = new Option();
        $option->nom_option = $request->name;
        $option->save();

        return redirect('option');
    }

    public function updateform(Request $request){
        $option = Option::find($request->id);
        return view('option.optionupdate', compact('option'));
    }

    public function updateProcess(Request $request){
        $option = option::find($request->id);
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
