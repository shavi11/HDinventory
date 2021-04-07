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
            <h1>Lista de compatibilidad</h1>
        </div>

            <table class="table">
        <thead>
          <tr>
            <th scope="col">Targetas Logicas</th>
            @foreach($discoL as $discoL)
          </tr> 
      
      <td>{{$discoL->targetaLogica}}</td>

    @endforeach

    </body>