<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Nuevas Observaciones</title>
</head>
<body>
     @foreach($agen_modu as $age)
    <p>Hola! Se ha reportado nuevas observaciones de la Agencia   {{ $age->nombre_agencia }}.</p>
     
    <p>Codigo generado :</p>
    <ul>
        <li>Codigo de la Supervicion : {{ $age->cod_supe }} </li>
       
        <li>Nombre del modulo : {{ $age->nombre_modulo }} </li>
     
        <li>Fecha : {{ $age->fecha_supe }}</li>
    </ul>
    @endforeach
    <p>Estas son algunas de las observaciones:</p>
    <ul>
        @foreach($num_obser as $obser)
        <li>{{ $obser->comentario }}</li>        
        @endforeach      
    </ul>
    <p>Para ver a mas detalle click en el siguiente link :<a href=" http://192.81.219.5/agencia-observaciones/{!! $cod_supe !!}">Aqui!!</p>
</body>
</html>