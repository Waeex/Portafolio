
<?php
session_start(); //Iniciamos o Continuamos la sesion
if (isset($_POST['txtusuario'])) //Si llego un Nickname via el formulario lo grabamos en la Sesion
{
	$_SESSION['nickname'] = $_POST['txtusuario']; //Nickname Grabado
}
if ($_SESSION['nickname']) //Si hay un nickname en la sesion actual, creamos una variable que será mostrada
{
	$grabado="El valor Grabado Previamente es: <strong>".$_SESSION['nickname']."</strong><br />
	<a href='pagina2.php'>pagina2.php</a>";
}
?>
 
<html>
<head>
</head>
<body>
<?php echo ($grabado); //El mensaje si hay nickname?>
<form action="" method="post">
Escribe tu Nickname: 
<input type="text" size="25" name="txtusuario" value="<?php echo $_SESSION['nickname'];?>"/>
<br />
<input type="submit" value="Grabar" />
</form>
</body>
</html>