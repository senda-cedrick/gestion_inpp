<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $services = Service::all();

        return view('service.service', compact('services'));
    }

    public function addform()
    {
        return view('service.serviceadd');
    }

    public function addservice(Request $request){
        $service = new Service();
        $service->name = $request->name;
        $service->save();

        return redirect('service');
    }

    public function updateform(Request $request){
        $service = Service::find($request->id);
        return view('service.serviceupdate', compact('service'));
    }

    public function updateProcess(Request $request){
        $service = Service::find($request->id);
        $service->nom_service = $request->name;
        $service->update();

        return redirect('service');
    }

    public function delete(Request $request){
        $service = Service::find($request->id);
        $service->delete();

        return redirect()->back();
    }
}
