<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$docum= $_POST['documento'];
$nomb= $_POST['nombres'];
$apelli=$_POST['apellidos'];

try{
$BD= new PDO('mysql:host=sql5.freemysqlhosting.net; bdname=sql5124996','sql5124996','c2d2UyxQzL');

$BD->exec("SET CHARACTER SET utf8");

$sql="INSERT INTO aprendices(documento,nombres,apellidos) VALUES ($docum,'$nomb','$apelli')";

$resultado=$BD->prepare($sql);

$resultado->execute(array($docum,$nomb,$apelli));

echo "datos ingresados correctamente!";
}

catch (pdoException $ex){
	echo( "Error de conexion  a la BD. ".$ex->GetMessage());
}


?>
</body>
</html>