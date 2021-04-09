@extends('plantilla')

@section('seccion')

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div class="header mt-3">
            <h1>Lista de Discos</h1>
        </div>

            <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Targeta Logica</th>
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
      <td>{{$discoL->targeta_logica}}</td>
      
    @endforeach
    </body>




@endsection