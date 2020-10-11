
<?php

$usuario = "root";
$contraseña = "";
$db = "northwind";

try{
	$con = new PDO('mysql:host=localhost;dbname=' . $db, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}


$Busqueda = "SELECT last_name FROM customers";
$ER = "[A|E|I|O|U]";

$Manejo = preg_match_all($ER, $Busqueda, $coincidencias);

var_dump($Manejo);

var_dump($coincidencias);
?>

