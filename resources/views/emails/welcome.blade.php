<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Nuevas Observaciones</title>
</head>
<body>
     @foreach($nombre_agencia as $age)
    <p>Hola! Se ha reportado nuevas observaciones de la Agencia   {{ $age->nombre_agencia }}.</p>
     @endforeach
    <p>Codigo generado</p>
    <ul>
        <li>Codigo de la Supervicion : {!! $cod_supe !!} </li>
       
        <li>Nombre del modulo : </li>
     
        <li>Fecha : </li>
    </ul>
   {{--  <p>Y esta es la posición reportada:</p>
    <ul>
        <li>Latitud:</li>
        <li>Longitud:</li>
      
    </ul> --}}
</body>
</html>