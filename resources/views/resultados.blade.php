@extends('plantilla')

@section('seccion')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <div class="container ">
    <body>
        <div class="header mt-3">
            <h1>Lista de compatibilidad </h1>
        </div>

        <div class="form-group">
              <input type="number" class="btn-block mt-3" name="targetaLogica" placeholder="ingrese la targeta logica">
              <div class="form-group">
                        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Cancelar</a>
                        <button class=" btn btn-primary mt-3" type="submit" >Buscar</button>
                    </div>
        </div>

            <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">USB</th>
            <th scope="col">SATA</th>
          </tr> 
        <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    </tr>
        </tbody>
    </body>
    </div>