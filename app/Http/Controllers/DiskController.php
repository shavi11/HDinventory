<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;

class DiskController extends Controller
{
    public function inicio(){
        return view('home');
    }


    public function registro(){
        return view('registro');
    }

    public function crear(Request $request){

        $request->validate([
            'id' => 'required',
            'targetaLogica' => 'required',
            'modelo' => 'required',
            'marca' => 'required',
            'capacidad' => 'required',
            'tipoEntrada' => 'required',
            'observaciones' => 'required',
        ]);
        
        $discoNuevo = new App\Disco;
        $discoNuevo->id_numero = $request->id;
        $discoNuevo->targetaLogica = $request->targetaLogica;
        $discoNuevo->modelo = $request->modelo;
        $discoNuevo->marca = $request->marca;
        $discoNuevo->capacidad = $request->capacidad;
        $discoNuevo->tipoEntrada = $request->tipoEntrada;
        $discoNuevo->observaciones = $request->observaciones;

        $discoNuevo->save();

        return back()->with('mensaje', 'Disco Agregado');
    }
    
     public function compatible(Request $request){

        $request->validate([
            'logico' => 'required'
        ]);

        $discoIm = $request->input('logico');
         $discoL = DB::table('compatibles')
         ->join('discos','discos.id','=','compatibles.id')
         ->where('targeta_logica', $discoIm)
         ->get();

         if(sizeof($discoL)>0){
             return view('resultado',compact('discoL'));
         }else{
             return back()->with('mensaje','Discos compatibles no encontrados');
         }
                
     }   


    public function resultado(){
        return view('resultado');
    }

}
