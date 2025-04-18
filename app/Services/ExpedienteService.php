<?php

namespace App\Services;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Expediente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpedienteService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getExpediente($id){
        return Expediente::find($id);
    }

    public function getExpedientes(Request $request){

        $query=Expediente::query();

        $query->when($request->input('expediente'),function($q) use ($request){
            $q->where('numero_expediente','ilike','%'.$request->input('expediente').'%');
        });
        $query->when($request->input('estatus'),function($q) use ($request){
            $q->where('id_estatus','=',$request->input('estatus'));
        });
        $query->when($request->input('fecha_inicio'),function($q) use ($request){
            $q->where('fecha_inicio','>=',$request->input('fecha_inicio'));
        });
        $query->when($request->input('fecha_fin'),function($q) use ($request){
            $q->where('fecha_inicio','<=',$request->input('fecha_fin'));
        });
        $query->when($request->input('asunto'),function($q) use ($request){
            $q->where('asunto','ilike','%'.$request->input('asunto').'%');
        });

        if(Auth::user()->id_rol!=1){
            return $query->where('id_usuario_registra',Auth::user()->id)->paginate(5);
        }else{
            return $query->withTrashed()->paginate(10);
        }
        
    }

    public function createExpediente(ExpedienteRequest $request){
        $fecha=Carbon::parse($request->fecha_inicio)->year;
        $numero=Expediente::whereYear('fecha_inicio',$fecha)->withTrashed()->count();
        return Expediente::create([
            'numero_expediente'=>sprintf('%05d', $numero).'/'.$fecha,
            'asunto'=>$request->asunto,
            'fecha_inicio'=>$request->fecha_inicio,
            'id_estatus'=>$request->estatus,
            'id_usuario_registra'=>Auth::user()->id,
        ]);
    }

    public function updateExpediente($expediente,ExpedienteRequest $request){
        Expediente::find($expediente)->update([
            'asunto'=>$request->asunto,
            'fecha_inicio'=>$request->fecha_inicio,
            'id_estatus'=>$request->estatus
        ]);
        return Expediente::find($expediente);
    }

    public function deleteExpediente($expediente){
        Expediente::find($expediente)->delete();
    }

}
