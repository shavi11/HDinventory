@extends('plantilla')

@section('seccion')

<header>
    <h1 class="pt-4">Registro de Disco Duro</h1>
</header>

    @if(session('mensaje'))
        <div class="alert alert-success">
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
<body>

    <form action="{{ route('disco.crear') }}" method="POST" enctype="multipart/form-data">
        <div class="container ">
        {{csrf_field()}}
             <div class="col-md-6">
                <div class="box box-primary">
                    <div class="panel panel-heading">
                        
                        </br>
                        <label form="id">ID</label>
                        <input class="form-control" type="text" name="id" id="idhd" placeholder="Ingrese el ID">
                        
                        <br>

                        <label form="TargetaLogica">Targeta Logica</label>
                        <input class="form-control" type="text" name="targetaLogica" id="targetaL" Placeholder="Ingrese la targeta logica">
                        <br>

                        <label form="Modelo">Modelo</label>
                        <input class="form-control" type="text" name="modelo" id="model" Placeholder="Ingrese el modelo">

                        <br>

                        <label form="Marca">Marca</label>
                        <input class="form-control" type="text" name="marca" id="marca" Placeholder="Ingrese la marca">

                        <br>
                        <label form="Capacidad">Capacidad</label>
                        <input class="form-control" type="text" name="capacidad" id="capacidad" Placeholder="Ingrese la capacidad">
                        <br>

                        <label form="TipoEntrada">Tipo de entrada</label>
                        <input class="form-control" type="text" name="tipoEntrada" id="tipoEntrada" Placeholder="Ingrese el tipo de entrada">
                        <br>
                        <label form="Observaciones">Observaciones</label>
                        <input class="form-control" type="text" name="observaciones" id="Observaciones">

                        <br>
                        <button type="submit" class="btn btn-success mb-5" value="Agregar" class>Registrar</button>
                        <a href="{{ url('/') }}" class="btn btn-primary mb-5">Volver</a>
                    </div>
                </div>
            </div>
         </div>
    </form>    
</body>




@endsection