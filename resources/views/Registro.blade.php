@extends('plantilla')

<nav class="navbar navbar-light" style="background-color: #FFCB00;" <div class="container">
    <div class="row">
        <div class="container-fluid">
            <h1 style="color:#fff">REGISTRO DE DISCO</h1>

<<<<<<< HEAD
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VirtualTecnoDinamyc</title>
        
    </head>

    @if(session('mensaje'))
        <div class="alert alert-danger">
            {{session('mensaje')}}
=======
>>>>>>> 86c803caee926a7dcf21421e6293001bf67a922c
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
    <title>TecnoVirtualDinamyc</title>

</head>

@if(session('mensaje'))
<div class="alert alert-danger">
    {{session('mensaje')}}
</div>

@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<!--<nav class="navbar navbar-expand-lg  bg-light">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">Volver</a>
    </nav>-->

<body>
   
    <header class="container-fluid" style="height: 720px; background-color: #0D6EFD ">
        <div class="row">
            <div class="col-12 align-self-center text-center placeholder-center">

                <form action="{{ route('disco.crear') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        {{csrf_field()}}
                        <div class="col-md-4 col-md-offset-4 mt-md-5 ">
                            <div class="box box-primary">
                                <div class="panel panel-heading align-self-center">

                                    </br>
                                    <label form="id">ID</label>
                                    <input class="form-control" type="text" name="id" id="idhd"
                                        placeholder="Ingrese el ID">

                                    <br>

                                    <label form="TargetaLogica">Targeta Logica</label>
                                    <input class="form-control" type="text" name="targetaLogica" id="targetaL"
                                        Placeholder="Ingrese la targeta logica">
                                    <br>

                                    <label form="Modelo">Modelo de Placa</label>
                                    <input class="form-control" type="text" name="modelo" id="model"
                                        Placeholder="Ingrese el modelo">

                                    <br>

                                    <label form="Marca">Marca de Disco Duro</label>
                                    <input class="form-control" type="text" name="marca" id="marca"
                                        Placeholder="Ingrese la marca">

                                    <br>
                                    <label form="Capacidad">Capacidad</label>
                                    <input class="form-control" type="text" name="capacidad" id="capacidad"
                                        Placeholder="Ingrese la capacidad">
                                    <br>

                                    <label form="TipoEntrada">Tipo de entrada</label>
                                    <input class="form-control" type="text" name="tipoEntrada" id="tipoEntrada"
                                        Placeholder="Ingrese el tipo de entrada">
                                    <br>
                                    <label form="Observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="Observaciones">

                                    <br>
                                    <button type="submit" class="btn btn-success mb-5" value="Agregar"
                                        class>Registrar</button>
                                    <a href="{{ url('/') }}" class="btn btn-primary mb-5">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>




@endsection