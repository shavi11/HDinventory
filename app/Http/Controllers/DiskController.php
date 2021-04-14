<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;
use App\Compatible;
use App\Disco;

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
        $discoNuevo->tarjetaLogica = $request->targetaLogica;
        $discoNuevo->modelo = $request->modelo;
        $discoNuevo->marca = $request->marca;
        $discoNuevo->capacidad = $request->capacidad;
        $discoNuevo->tipoEntrada = $request->tipoEntrada;
        $discoNuevo->observaciones = $request->observaciones;

        $discoNuevo->save();

        $new = $request->targetaLogica;
            return view('addCompatible',compact('new'));
    
            //return back()->with('mensaje', 'Disco Agregado');
    }
    

        public function eliminar($id){
        
            // $discoL = DB::table('compatibles')
            // ->select("discos.*"
            // 	,DB::raw("(GROUP_CONCAT(compatibles.tarjeta_logica SEPARATOR '-')) as `tarjeta_logica`"))
            // ->leftjoin("discos","discos.id","=","compatibles.id_logica")
            // ->groupBy('compatibles.id_logica')
            // ->get();
            $discoEliminar = App\compatible::findOrFail($id);
            $discoEliminar->delete();
            return back();    
        }


     public function compatible(Request $request){

        $request->validate([
            'logico' => 'required'
        ]);
         $busqueda = $request->input('logico');   
         //https://www.google.com/search?q=701499&oq=701499&aqs=chrome..69i57.2100j0j15&sourceid=chrome&ie=UTF-8       
         $discoL = DB::table('compatibles')
         ->join('discos','discos.id','=','compatibles.id_logica')
         ->where('tarjeta_logica',  $request->logico)
         ->get();
         if(sizeof($discoL)>0){
             return view('resultado',compact('discoL'));

         }else{
             return redirect('https://www.google.com/search?q='.$busqueda.'&oq='.$busqueda.'&aqs=chrome..69i57.2100j0j15&sourceid=chrome&ie=UTF-8');
         }
                
     }   

    public function add(Request $request){
        
        $discoL = DB::table('discos')
         ->where('bandera', 0)
         ->get();

         foreach ($discoL as $discoL) {
            $tl = $discoL->id;
         }

        $compatible = new Compatible();
        $compatible->id_logica =  $tl;
        $compatible->tarjeta_logica =  $request->compatible;
        $compatible->save();

        return redirect('addCompatible')->with('mensaje','Tajeta Logica Compatible Añadida');
    }

    public function resultado(){
        return view('resultado');
    }

    public function terminaRegistro(){
        DB::table('discos')
            ->where('bandera', 0)
            ->update(['bandera' => 1]);
            
        return view('home');
    }

    public function addCompatible(){
        return view('addCompatible');
    }

    public function showDisk(){
        $discoL = DB::table('compatibles')
            ->select("discos.*"
            	,DB::raw("(GROUP_CONCAT(compatibles.tarjeta_logica SEPARATOR '-')) as `tarjeta_logica`"))
            ->leftjoin("discos","discos.id","=","compatibles.id_logica")
            ->groupBy('compatibles.id_logica')

            ->get();       
        $dis = DB::table('discos')->get();

      return view('showDisk',compact('dis'));
    }
    public function filtrado(Request $request){
        $request->validate([
            'busqueda' => 'required'
        ]);
        $buscado = $request->input('busqueda'); 
        
        $dis = DB::table('discos')
        ->select('discos.*')
        ->where('tarjetaLogica',$buscado)
        ->get();
        
          return view('showdisk', compact('dis'));
       
     
    }
}
