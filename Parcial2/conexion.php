<?php
/*
$host="localhost";
$user="root";
$password="";
$db="payment";
$con = new mysqli($host,$user,$password,$db);

?>

<?php
*/


		$usuario = "root";
		$contraseña = "";
		$db = "northwind";

		try{
			$con = new PDO('mysql:host=localhost;dbname=' . $db, $usuario, $contraseña);
		}catch(Exception $e){
			echo "Ocurrió algo con la base de datos: " . $e->getMessage();
		}
		
	 
 


?>