<?php 
$con = mysqli_connect("localhost","root","root","MinkayG");
$cod_gene = $_POST["cod_supe"];
$idmod = $_POST["idmodulo"];
$ruta_imagen = $_POST["ruta_imagen"];
$comentario = $_POST["comentario"];
$fecha = date("Y-m-d");
$idusu = $_POST["idusu"];


$generaridfotos = date('Y_m_d_H_i_s');
$path = "uploads/$generaridfotos.jpg";
$actualpath = "192.81.219.5/webservice/$path";
file_put_contents($path,base64_decode($ruta_imagen));

$statement = mysqli_prepare($con,"INSERT INTO observacions(cod_supe,idmodulo,ruta_imagen,comentario,fecha_supe,idusu)
			VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($statement, "sisssi", $cod_gene,$idmod,$ruta_imagen,$comentario,$fecha,$idusu);
mysqli_stmt_execute($statement);
$response =  array();
$response["success"] = false;
while(mysqli_stmt_fetch($statement)){
	$response["success"] = true;
	
	

}

echo json_encode($response);

 ?>