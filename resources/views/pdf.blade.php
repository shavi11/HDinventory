@extends('plantilla')
@section('seccion')       

  <div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto ">
        <h2>
            Inventario
        </h2>

            <table class="table table-bordered ">
                
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tarjeta Logica</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Tipo de Entrada</th>
                        <th scope="col">Observaciones</th>
                    </tr>
                </thead>
                <tbody>
     
                    @foreach($dis as $dis)
                    <td>{{$dis->id_numero}}</td>
                    <td>{{$dis->tarjetaLogica}}</td>
                    <td>{{$dis->modelo}}</td>
                    <td>{{$dis->marca}}</td>
                    <td>{{$dis->capacidad}}</td>
                    <td>{{$dis->tipoEntrada}}</td>
                    <td>{{$dis->observaciones}}</td>
                    @endforeach
                </tbody>
            </table>


  

        </div>
    </div>
</div>

  
@endsection