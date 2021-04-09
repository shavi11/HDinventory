@extends('plantilla');

@section('seccion')

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
         <div class="header">
            <h1>Discos Compatibles</h1>
          </div>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="container ">
                 {{csrf_field()}}
              <div class="col-md-6">
                  <div class="box box-primary">
                      <div class="panel panel-heading">
                        
                        </br>
                        <input class="form-control" type="text" name="compatible" placeholder="Ingrese Disco Compatible"> 
                        <button class="btn btn-success mt-3" type="submit">Añadir</button>   
                     </div>      
                  </div>
               </div>
              </div>
            </form>  
    </body>






@endsection;