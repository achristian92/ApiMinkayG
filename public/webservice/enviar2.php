<?php 

$nombres = $_POST['nombres']; 
//$apellidos = $_POST['apellidos'];
//$celular = $_POST['celular'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje']; 
//$mensaje2 = $_POST['mensaje'];
$ip= $_SERVER['REMOTE_ADDR']; 



$header = 'From: ' . $email . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombres . " \r\n"; 
//$mensaje .= "Apellidos : " . $apellidos . "\r\n";
//$mensaje .= "Celular : " . $celular . " \r\n";
$mensaje .= "E-mail : " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 



$info=detect();

$os= $info['os'];
$nav=$info['browser'];
$ver=$info['version'];
/*
*echo $_SERVER['HTTP_USER_AGENT'];
 * Funcion que devuelve un array con los valores:
 *	os => sistema operativo
 *	browser => navegador
 *	version => version del navegador
 */
function detect()
{
	$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
	$os=array("WIN","MAC","LINUX");
	
	# definimos unos valores por defecto para el navegador y el sistema operativo
	$info['browser'] = "OTHER";
	$info['os'] = "OTHER";
	
	# buscamos el navegador con su sistema operativo
	foreach($browser as $parent)
	{
		$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
		$f = $s + strlen($parent);
		$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
		$version = preg_replace('/[^0-9,.]/','',$version);
		if ($s)
		{
			$info['browser'] = $parent;
			$info['version'] = $version;
		}
	}
	
	# obtenemos el sistema operativo
	foreach($os as $val)
	{
		if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
			$info['os'] = $val;
	}
	
	# devolvemos el array de valores
	return $info;
}


//$para = 'ventas@minkay.com'; 
$para = 'christian922017@gmail.com'; 
$asunto = 'MINKAY MENSAJE'; 

/*
$hostname = 'dime201';
$database = 'ezite_pruebas';
$username = 'ezite_pruebas';
$password = 'Homero2087@';


$conexion = new mysqli();
$conexion->connect($server, $username, $password, $database);
$meter = mysqli_query($conexion,'INSERT INTO registro( `nombres`,`apellidos`, `celular`,`email`,`mensaje`, `ip`,`s_o`,`navegador`,`vrs_nav`) VALUES 
		("'.$nombres.'", "'.$apellidos.'","'.$celular.'","'.$email.'","'.$mensaje2.'","'.$ip.'","'.$os.'","'.$nav.'","'.$ver.'")');

*/


if(mail($para, $asunto, utf8_decode($mensaje), $header)){
echo "<center>";
echo"<script type=\"text/javascript\">alert('Su mensaje se ha enviado correctamente,nos comunicaremos con usted lo mas pronto posible'); window.location='index.html';</script>";  
}else{
echo"<script type=\"text/javascript\">alert('Hubo un error en el envío, inténtelo más tarde'); window.location='index.html';</script>";
echo "</center>";
}
?> 