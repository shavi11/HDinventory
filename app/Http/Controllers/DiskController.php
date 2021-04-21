<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;
use App\Compatible;
use \PDF;

class DiskController extends Controller
{
    public function inicio(){
        return view('home');
    }


    public function registro(){
        return view('registro');
    }

    public function crear(Request $request){

        $campos=[
            'id_numero' => 'required',
            'targetaLogica' => 'required',
            'modelo' => 'required',
            'marca' => 'required',
            'capacidad' => 'required',
            'tipoEntrada' => 'required',
            
        ];
        $mensaje=[
            "required"=>'Campo requerido',
        ];
        $this->validate($request,$campos,$mensaje);


        
        $discoNuevo = new App\Disco;
        $discoNuevo->id_numero = strtoupper( $request->id_numero);
        $discoNuevo->tarjetaLogica = strtoupper($request->targetaLogica);
        $discoNuevo->modelo = strtoupper($request->modelo);
        $discoNuevo->marca = strtoupper($request->marca);
        $discoNuevo->capacidad = strtoupper($request->capacidad);
        $discoNuevo->tipoEntrada = strtoupper($request->tipoEntrada);
        $discoNuevo->observaciones = strtoupper($request->observaciones);

        $discoNuevo->save();

        $new = $request->targetaLogica;
            return view('addCompatible',compact('new'));
    
            //return back()->with('mensaje', 'Disco Agregado');
    }

        public function editar($id){
            $disco = App\Disco::findOrFail($id);
            return view('editar',compact('disco'));
        }
        
        public function update(Request $request, $id){
               $discoUpdate = App\Disco::findOrFail($id);
               $discoUpdate->id = $request->id;
               $discoUpdate->id_numero = strtoupper($request->id_numero);
               $discoUpdate->tarjetaLogica = strtoupper($request->tarjetaLogica);
               $discoUpdate->modelo = strtoupper($request->modelo);
               $discoUpdate->marca = strtoupper($request->marca);
               $discoUpdate->capacidad = strtoupper($request->capacidad);
               $discoUpdate->tipoEntrada = strtoupper($request->tipoEntrada);
               $discoUpdate->observaciones = strtoupper($request->observaciones);
               
               $discoUpdate->save();

               $new = $request->targetaLogica;

               DB::table('discos')
                ->where('id', $id)
                ->update(['bandera' => 0]);

                $dis = DB::table('compatibles')
                ->select('*')
                ->where('id_logica', $id)
                ->get();


               return view('editCompatible',compact('new','dis','id'));
        }
        


        public function eliminar(Request $request, $id){
            
            $disco = DB::table('discos')->where('id', '=', $id)->delete();
            

        return back();  
        }
        
        public function eliminarCompatible(Request $request, $id){
            
            $disco = DB::table('compatibles')->where('id', '=', $id)->delete();
      
        $id_dis = DB::table('discos')
        ->select('id')
        ->where('bandera','0')
        ->first();

            $dis = DB::table('compatibles')
                ->select('*')
                ->where('id_logica', $id_dis->id)
                ->get();
                
                return view('editCompatible',compact('dis'));
        }

        public function imprimir(){
            $dis = DB::table('discos')
            ->select('discos.*')
            ->get();
            
            $pdf = \PDF::loadView('pdf',compact('dis'))->setOptions(['defaultFont' => 'sans-serif']); 
        
            return $pdf->download('invoice.pdf'); 
            
        }

     public function compatible(Request $request){

        $request->validate([
            'logico' => 'required'
        ]);
         $busqueda = strtoupper($request->input('logico'));   
         //https://www.google.com/search?q=701499&oq=701499&aqs=chrome..69i57.2100j0j15&sourceid=chrome&ie=UTF-8       
         $discoL = DB::table('compatibles')
         ->join('discos','discos.id','=','compatibles.id_logica')
         ->where('tarjeta_logica',  strtoupper($request->logico))
         ->get();
         if(sizeof($discoL)>0){
             return view('resultado',compact('discoL'));

         }else{
             $dis = DB::table('listas')
             ->select('USB','SATA')
            ->where('USB',  $busqueda)
            ->distinct('SATA')
            ->get();
            $mensaje='Tarjeta Logica USB-SATA';
             if (sizeof($dis)>0) {
                 return view('lista',compact('dis','mensaje'));
             }else{         
                    $dis = DB::table('listas')
                    ->select('USB','SATA')
                    ->where('SATA',  $busqueda)
                    ->distinct('USB')
                    ->get();
                    $mensaje='Tarjeta Logica SATA-USB';
                    if (sizeof($dis)>0) {
                        return view('lista',compact('dis','mensaje'));
                    }else{
                        return redirect('https://www.google.com/search?q='.$busqueda.'+to+sata');
                    }
             }
            
             
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
        $compatible->tarjeta_logica =  strtoupper($request->compatible);
        $compatible->save();

        return redirect('addCompatible')->with('mensaje','Tajeta Logica Compatible Añadida');
    }

    public function add2(Request $request){
        
        $discoL = DB::table('discos')
         ->where('bandera', 0)
         ->get();

         foreach ($discoL as $discoL) {
            $tl = $discoL->id;
         }

        $compatible = new Compatible();
        $compatible->id_logica =  $tl;
        $compatible->tarjeta_logica = strtoupper( $request->compatible);
        $compatible->save();

        $dis = DB::table('compatibles')
        ->select('*')
        ->where('id_logica', $tl)
        ->get();

        return view('editCompatible',compact('dis'))->with('mensaje','Tajeta Logica Compatible Añadida');
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
    public function terminaRegistro2(){
        DB::table('discos')
            ->where('bandera', 0)
            ->update(['bandera' => 1]);
            
            $dis = DB::table('discos')->get();

            return view('showDisk',compact('dis'));
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
        $buscado = strtoupper($request->input('busqueda')); 
        
        $dis = DB::table('discos')
        ->select('discos.*')
        ->where('tarjetaLogica',$buscado)
        ->get();
        
          return view('showDisk', compact('dis'));
       
     
    }
}
