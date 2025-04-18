<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Estatus;
use App\Models\Expediente;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    //

    public function index(Request $request)
    {
        $estatus=Estatus::get();
        $expedientes=app()->make('App\Services\ExpedienteService')->getExpedientes($request);
        return view('home',[
            'expedientes'=>$expedientes,
            'estatus'=>$estatus,
        ]);
    }

    public function show(Request $request){
        $expediente=app()->make('App\Services\ExpedienteService')->getExpediente($request->expediente);
        $estatus=Estatus::get();
        return view('expedientes.show',[
            'expediente'=>$expediente,
            'estatus'=>$estatus,
        ]);
    }

    public function update(ExpedienteRequest $request){
        app()->make('App\Services\ExpedienteService')->updateExpediente($request->expediente,$request);
        return redirect()->back()->with('success','Guardado');
    }

    public function create(){
        $expediente=new Expediente();
        $estatus=Estatus::get();
        return view('expedientes.show',[
            'estatus'=>$estatus,
            'expediente'=>$expediente,
        ]);
    }
    public function post(ExpedienteRequest $request){
        $expediente=app()->make('App\Services\ExpedienteService')->createExpediente($request);
        return redirect()->route('expediente.mostrar',[$expediente->id]);
    }

    public function delete(Request $request){
        app()->make('App\Services\ExpedienteService')->deleteExpediente($request->expediente);
        return redirect()->back();
    }


}
