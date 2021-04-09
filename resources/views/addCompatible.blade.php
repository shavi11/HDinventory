@extends('plantilla')

@section('seccion')

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
         <div class="header">
            <h1 >Discos Compatibles</h1>
          </div>
          <form action="{{ route('addCompatible') }}" method="POST" enctype="multipart/form-data">
            <div class="container ">
                 {{csrf_field()}}
              <div class="col-md-6">
                  <div class="box box-primary">
                      <div class="panel panel-heading">
                        
                        @if (!empty($new))
                            <h3>Targeta Logica: {{$new}} </h3>
                        @else
                                    <?php 
                                    $disco = DB::table('discos')
                                    ->where('bandera', 0)
                                    ->select('tarjetaLogica')
                                    ->first();
                                    ?>
                          <h3>Targeta Logica: {{ $disco->tarjetaLogica}} </h3>
                        @endif
                        
                     
                        <input class="form-control" type="text" name="compatible" placeholder="Ingrese Disco Compatible"> 
                        <button class="btn btn-outline-success mt-3" type="submit">Añadir</button>

                        <a href="{{url('/')}}"class="btn btn-outline-primary mt-3">Terminar Registro</a>  
                     </div>      
                  </div>
               </div>
              </div>
            </form>  
    </body>






@endsection