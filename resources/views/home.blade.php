<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TecnoVirtualDinamyc</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
<body>
@if(session('mensaje'))
        <div class="alert alert-danger">
            {{session('mensaje')}}
        </div>

    @endif
<nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container">
                <div class="row">
                  <div class="container-fluid">
                     <h1>TECNO VIRTUAL DINAMYC</h1>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                   <div class="navbar-nav">
                       <a class="nav-link" href="{{ url('/registro') }}">Registro</a>
                   </div>
                <div class="container-fluid">
                    <form action="{{ route('disco.compatible') }}" method="POST" class="d-flex">
                    {{csrf_field()}}
                        <input class="form-control me-4" type="search" placeholder="Ingrese tarjeta logica" aria-label="Search" name="logico">
                        <button class="btn btn-outline-success" type="submit">Búsqueda</button>
                    </form>
                  </div>
               </div>
             </div>
             </div>
             </div>

     </nav>

     <header class="container-fluid" style="height: 550px; background-color: #5cbd9d ">
         <div class="row"> 
           <div class="col-12 align-self-center text-center" >
               <img src="{{asset('images/logo.jpg')}}" class= "img-fluid" width="400px " alt="">
               <br><br><br><br>
                <h1>Bienvenidos a TECNO VIRTUAL DINAMYC</h1>
              <p> LA SOLUCION A TU ALCANCE</p>
           </div>
         </div>
     </header>
</body>
<footer>
   <div class="container">
      <div class="row" >
          <p>Central: Edificio SKYBOX - Antezana casi Heroinas, Oficina #4 Planta baja</p>
      </div>
   </div>
</footer>
</html>