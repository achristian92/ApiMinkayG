@extends('layouts.app')

@section('content')


<script type="text/javascript">$(document).ready(function() {
  $('#example').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});

</script>
<style type="text/css">
    h3{
        letter-spacing: 1px;
        padding-bottom: 10px;
        font-weight: bold;
    }

    .btn.btn-danger{
        padding-bottom: 1px;
        padding-top: 1px
    }
</style>





<div class="container">
    <a class="btn btn-primary" href="{{ url('/home') }}"> << Regresar</a>
    <div class="row">
        <h3 align="center">
            LISTADO DE AGENCIAS OBSERVADAS
        </h3>
         <span style="margin bottom:50px; float: right; padding-bottom: 25px; padding-right: 20px"> Exportar a <img src="http://icons.iconarchive.com/icons/blackvariant/button-ui-ms-office-2016/256/Excel-2-icon.png" height="25" width="25" onclick="funcione()" id="imgexcel" style="cursor: pointer"></span>
        <div class="col-xs-12">
            
               
            
            
            <table cellspacing="0" class="display table table-bordered table-hover dt-responsive" id="tablagerencia" style="font-family: Helvetica,Arial,sans-serif; width: 100%; max-width: 100%" > 
                <caption class="text-center">
                </caption>
                <thead>
                    <tr class="dropdown">
                        <th>
                            USUARIO
                        </th>
                        <th>
                            ZONA
                        </th>
                        <th>
                            REGIÓN
                        </th>
                        <th>
                            AGENCIA
                        </th>
                        <th>
                            RONDA
                        </th>
                        <th>
                            FECHA
                        </th>
                        <th>
                            ACCIÓN
                        </th>


                    </tr>
                </thead>
                <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            2
                        </td>
                        <td>
                            <a href="../Buscar-Vehiculo/U07Kut/detalleVehiculo">U07Kut</a>
                        </td>
                        <td>
                            2018-01-02
                        </td>
                        <td>
                            81.97
                        </td>
                        <td>
                            2018-03-04
                        </td>
                        <td>
                            <span class="vencido">VENCIDO</span>
                        </td>
                        <td>
                            <a href="{{ url('/observaciones') }}" class="btn btn-danger">
                             <span class="glyphicon glyphicon-search"></span>
                              Observaciones</a>
                        </td>
                    </tr>




                 </tbody>
            </table>
             <div class="dataTables_info col-sm-6">
               
            </div>


        </div>


    </div>
</div>

@endsection
