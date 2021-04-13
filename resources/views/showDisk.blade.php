@extends('plantilla')
<nav class="navbar navbar-light" style="background-color: #FFCB00;" <div class="container">
    <div class="row">
        <div class="container-fluid">
            <h1 style="color:#fff">LISTA DE DISCOS</h1>

        </div>
    </div>
    </div>
</nav>
@section('seccion')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtualTecnoDinamyc</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg  bg-light">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">Volver</a>
    </nav>
    
    <div class="container-fluid" style="background-color: #0D6EFD ">
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
                     
                        @foreach($dis as $dis)
                    </tr>
                    <td>{{$dis->id_numero}}</td>
                    <td>{{$dis->tarjetaLogica}}</td>
                    <td>{{$dis->modelo}}</td>
                    <td>{{$dis->marca}}</td>
                    <td>{{$dis->capacidad}}</td>
                    <td>{{$dis->tipoEntrada}}</td>
                    <td>{{$dis->observaciones}}</td>
                    
                    @endforeach
            </table>
           
        </div>
        
    </div>
    
</body>
<nav class="navbar navbar-expand-lg  bg-light">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">Volver</a>
    </nav>
@endsection