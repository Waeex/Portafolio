
<?php

$usuario = "root";
$contraseña = "";
$db = "northwind";

try{
	$con = new PDO('mysql:host=localhost;dbname=' . $db, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}


$sql = "SELECT last_name FROM customers WHERE last_name REGEXP '^[aeiou]'";


var_dump($sql);


?>
