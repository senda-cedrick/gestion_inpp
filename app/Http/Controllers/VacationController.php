<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;

class VacationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $vacations = Vacation::all();

        return view('vacation.vacation', compact('vacations'));
    }

    public function addform()
    {
        return view('vacation.vacationadd');
    }

    public function addvacation(Request $request){
        $vacation = new Vacation();
        $vacation->name = $request->name;
        $vacation->heuredebut = $request->hdebut;
        $vacation->heurefin = $request->hfin;
        $vacation->save();

        return redirect('vacation');
    }

    public function updateform(Request $request){
        $vacation = Vacation::find($request->id);
        return view('vacation.vacationupdate', compact('vacation'));
    }

    public function updateProcess(Request $request){
        $vacation = Vacation::find($request->id);
        $vacation->name = $request->name;
        $vacation->heuredebut = $request->hdebut;
        $vacation->heurefin = $request->hfin;
        $vacation->update();

        return redirect('vacation');
    }

    public function delete(Request $request){
        $vacation = Vacation::find($request->id);
        $vacation->delete();

        return redirect()->back();
    }
}
