@extends('plantilla')
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <h1 style="color:#FFFFFF">VIRTUAL TECNO DINAMYC</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav me-4">
                            <a class="navbar-brand" href="{{ url('/registro') }}">Registrar HDD</a>
                        </div>
                        <div class="navbar-nav">
                            <a class="navbar-brand" href="{{ url('/registro') }}">Tabla HDD</a>
                        </div>
                        <div class="navbar-nav navbar-right">
                            <form action="{{ route('disco.compatible') }}" method="POST" class="d-flex">
                                {{csrf_field()}}
                                <input class="form-control me-3 mx-3" type="search" placeholder="Ingrese tarjeta logica"
                                    aria-label="Search" name="logico">
                                <button class="btn btn-outline-light" type="submit">Búsqueda</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    </head>
    </header>