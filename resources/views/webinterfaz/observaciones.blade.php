@extends('layouts.app')

@section('content')
<script type="text/javascript">
    $(document).ready(function() {
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
    <a class="btn btn-primary" href="{{ route('agencias.super') }}">
        << Regresar
    </a>
    <div class="row">
        <h3 align="center">
            LISTA DE OBSERVACIONES
        </h3>
        <span style="margin bottom:50px; float: right; padding-bottom: 25px; padding-right: 20px">
            Exportar a
            <img height="25" id="imgexcel" onclick="funcione()" src="http://icons.iconarchive.com/icons/blackvariant/button-ui-ms-office-2016/256/Excel-2-icon.png" style="cursor: pointer" width="25"/>
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
                        <td>
                            <img alt="" height="50px" src="{{ $age->ruta_imagen }}" width="50px"/>
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
@endsection
