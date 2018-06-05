<?php 
$con = mysqli_connect("localhost","root","fb31d223a592c87cb0c2db397a43b69980f161bd2b2434d8","WS_MINKAYG");

$idusu = $_POST["idusu"];
$idagencia = $_POST["idagencia"];
$idronda = $_POST["idronda"];
$cod_gene = "codprueba";
$jefe_encargado = $_POST["jefe_encargado"];
$fecha = date("Y-m-d");


$statement = mysqli_prepare($con,"INSERT INTO agencia__supers(idusu,idagencia,idronda,cod_supe,jefe_encargado,fecha_agsupe)
			VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($statement, "iiisss", $idusu,$idagencia,$idronda,$cod_gene,$jefe_encargado,$fecha);
mysqli_stmt_execute($statement);
$response =  array();
$response["success"] = true;
echo json_encode($response);

 ?>