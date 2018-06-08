@extends('layouts.app')

@section('content')




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

    .fade{
        opacity: 1;
        background-color: rgba(0,0,0,0.6);

    }

    .modal-sm{
        width: 600px;
        top: 100px
    }

    @keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn;
}




</style>

 <script type="text/javascript">
  $(document).ready(function(){
    $( ".celdaimagen" ).hover(function() {

        // alert("hola mundo");

        $('#modalpic').modal({
        show: true
        });



        
        //    $('#modalpic').modal({
        // show: true
    });
  });  

</script>


<div class="container">
    <a class="btn btn-primary" href="{{ route('agencias.super') }}">
        << Regresar
    </a>
    <div class="row">
        <h3 align="center">
            LISTA DE OBSERVACIONES
        </h3>
        <span style="margin bottom:50px; float: right; padding-bottom: 25px; padding-right: 20px">
            Exportar a
            <img height="25" id="imgexcel" src="http://icons.iconarchive.com/icons/blackvariant/button-ui-ms-office-2016/256/Excel-2-icon.png" style="cursor: pointer" width="25"/>
        </span>
        <div class="col-xs-12">
            <table cellspacing="0" class="display table table-bordered table-hover dt-responsive" id="tablagerencia" style="font-family: Helvetica,Arial,sans-serif; width: 100%; max-width: 100%">
                <caption class="text-center">
                </caption>
                <thead>
                    <tr class="dropdown">
                        <th>
                            ID
                        </th>
                        <th>
                            FOTO
                        </th>
                        <th>
                            COMENTARIO
                        </th>
                        <th>
                            MODULO
                        </th>
                        <th>
                            FECHA
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($age_su as $age)
                    <tr class="odd" role="row">
                        <td class="sorting_1">
                            {{ $age->idob }}
                        </td>
                        <td class="celdaimg">
                            <img src="/192.81.219.5{{ $age ->ruta_imagen}}">
                        </td>
                        <td>
                            {{ $age->comentario }}
                        </td>
                        <td>
                            {{ $age->nombre_modulo }}
                        </td>
                        <td>
                            {{ $age->fecha_supe }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="dataTables_info col-sm-6">
            </div>

        </div>
    </div>
</div>

                                <div id="modalpic" class="modal fade  " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm zoomIn">
                                    <div class="modal-content zoomIn">
                                     <img src="https://cdn.pixabay.com/photo/2017/02/18/11/00/checklist-2077020__340.jpg">
                                    </div>
                                  </div>
                                </div>


@endsection

