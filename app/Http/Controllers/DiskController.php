<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class DiskController extends Controller
{
    public function inicio(){
        return view('welcome');
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
        $discoNuevo->id = $request->id;
        $discoNuevo->targetaLogica = $request->targetaLogica;
        $discoNuevo->modelo = $request->modelo;
        $discoNuevo->marca = $request->marca;
        $discoNuevo->capacidad = $request->capacidad;
        $discoNuevo->tipoEntrada = $request->tipoEntrada;
        $discoNuevo->compatibilidad = $request->compatibilidad;
        $discoNuevo->observaciones = $request->observaciones;

        $discoNuevo->save();

        return back()->with('mensaje', 'Disco Agregado');
    }
    

    public function resultado(){
        return view('resultado');
    }

}
