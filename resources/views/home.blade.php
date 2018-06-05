@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row" align="center">
        <div class="col-sm-6" >
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="http://www.municipalidadchincha.gob.pe/webchincha/Muni-Chincha-2015/img/convolis.png" height="150" width="150">
                </div>
                <div class="panel-footer" style="background-color: transparent;">
                    <a href="{{ url('/agencias') }}" class="btn btn-primary" style="background-color: transparent; border-color: transparent; color: #4c4cff; font-weight: bold">
                        Observaciones
                    </a> 
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="http://www.grupoemprende.mx/wp-content/uploads/2015/06/icono-usuarios.jpg" height="150" width="250"> 
                 </div>
                <div class="panel-footer" style="background-color: transparent;">
                    <a href="" class="btn btn-primary" style="background-color: transparent; border-color: transparent; color: #4c4cff; font-weight: bold">
                        Administrador
                    </a> 
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
