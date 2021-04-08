@extends('navbar')
<!DOCTYPE html>
<body>
    @if(session('mensaje'))
    <div class="alert alert-danger">
        {{session('mensaje')}}
    </div>
    @endif
    
    <header class="container-fluid" style="height: 550px; background-color: #5cbd9d ">
    
        <div class="row">
            <div class="col-12 align-self-center text-center">
                <img src="{{asset('images/logo.jpg')}}" class="img-fluid" width="400px " alt="">
                <br><br><br><br>
                <h1>Bienvenidos a TECNO VIRTUAL DINAMYC</h1>
                <p> LA SOLUCION A TU ALCANCE</p>
            </div>
        </div>
    </header>
</body>
<footer>
    <div class="container">
        <div class="row">
            <p>Central: Edificio SKYBOX - Antezana casi Heroinas, Oficina #4 Planta baja</p>
        </div>
    </div>
</footer>

