<?php 
$con = mysqli_connect("localhost","root","","webserviceminkayg");

$email = $_POST["email"];
$password = $_POST["password"];

$statement = mysqli_prepare($con, "select id,name,apellidos from users where email = ? and password = ? and accesoApp= 1");
mysqli_stmt_bind_param($statement, "ss",$email, $password);
mysqli_stmt_execute($statement);
mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement,$id,$name,$apellidos);
$response = array();
$response["success"] = false;
while(mysqli_stmt_fetch($statement)){
	$response["success"] = true;
	$response["id"] = $id;
	$response["name"] = $name;	
	$response["apellidos"] = $apellidos;	
	$response["email"] = $email;
	$response["password"] = $password;
	

}
echo json_encode($response);


 ?>