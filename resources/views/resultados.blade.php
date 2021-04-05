@extends('plantilla')

@section('seccion')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div class="header" >
            <h1>Lista de compatibilidad</h1>
        </div>

        <div class="form-group">
              <input type="number" class="btn-block mt-3" name="targetaLogica" placeholder="ingrese la targeta logica">
              <div class="form-group">
                        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Cancelar</a>
                        <button class=" btn btn-primary mt-3" type="submit" >Buscar</button>
                    </div>
        </div>

            <table class="table">
        <thead>
          <tr>
            <th scope="col">USB</th>
            <th scope="col">SATA</th>
          </tr> 
    </body>