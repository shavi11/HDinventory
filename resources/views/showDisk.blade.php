@extends('plantilla')

@section('seccion')

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TecnoVirtualDinamyc</title>
        
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container">
                <div class="row">
                      <div class="col-12 align-self-center text-center">
                            <h1>LISTA DE DISCOS</h1>
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                   
                      <div class="container-fluid">
                   </div>
                    
               </div>
             </div>

     </nav>
          <header class="container-fluid" style="height: 500px; background-color: #0D6EFD ">
          <div class="row">

                  <table class="table text-white">
             <thead>
              <tr>
                 <th scope="col">ID</th>
                 <th scope="col">Tarjeta Logica</th>
                 <th scope="col">Modelo</th>
                 <th scope="col">Marca</th>
                 <th scope="col">Capacidad</th>
                 <th scope="col">Tipo de Entrada</th>
                 <th scope="col">Observaciones</th>
                 <th scope="col">Disco Compatible</th>
                   @foreach($discoL as $discoL)
              </tr> 
          <td>{{$discoL->id_numero}}</td>
          <td>{{$discoL->tarjetaLogica}}</td>
          <td>{{$discoL->modelo}}</td>
          <td>{{$discoL->marca}}</td>
          <td>{{$discoL->capacidad}}</td>
          <td>{{$discoL->tipoEntrada}}</td>
          <td>{{$discoL->observaciones}}</td>
          <td>{{$discoL->tarjeta_logica}}</td>
      
      
        @endforeach
        </table>
        </div>
    </header>
    </body>
    <footer>
    <div class="row">
    <div class="col-5"></div> 
    <div class="col-5"> <a href="{{ url('/') }}" class="btn btn-primary float-left ">Volver</a></div>
    </div>
         
    </footer>




@endsection