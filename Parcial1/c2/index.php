

<?php

if(isset($_POST["par1"]) && isset($_POST["par2"]) && isset($_POST["op"]))
{
	require "funciones.php";

	$par1 = $_POST["par1"];
	$par2 = $_POST["par2"];
	$op = trim($_POST["op"]);
	if(!is_numeric($par1) || !is_numeric($par2)) 
	{
		$resultado = "Ingrese Números";
	} 
	else 
	{
		$par1 = intval($par1, 10);
		$par2 = intval($par2, 10);
		switch ($op)
		{
			case "+": $resultado = sumar($par1, $par2); break;
			case "-": $resultado = restar($par1, $par2); break;
			case "*": $resultado = multiplicar($par1, $par2); break;
			case "/":
			if($par2 != 0) {
				$resultado = dividir($par1, $par2); 
			} else {
				$resultado = "Err. Div. Cero";
			}
			break;
			default: $resultado = "Seleccione Operación";
		}
	}
	
	/*Genera respuesta en JSON*/
	echo json_encode($resultado);
	
	exit();
}

?>
<html>
<head>
	<title>Calculadora</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="jquery-1.4.2.js"></script>
	<script src="json2.js"></script>
	<script type="text/javascript">
		function CalcularTotal()
		{
			var par1 = $("#par1").val();
			var par2 = $("#par2").val();
			var op = $("#op").val();
			
			/*Solicitamos el resultado con AJAX según el método POST*/
			/*como parámetro (por POST) se envía el par1, par2 y op.*/
			$.post("index.php", {par1: par1, par2: par2, op: op}, function(resultado){
				$("#res").val(resultado);
			}, "json"); /*El parámetro "json" indica que la respuesta desde PHP es en formato JSON*/
		}	
	</script>
	
</head>
<body>
	<div>
		<a href="../../"  class="btn btn-primary btn-block">Regresar</a>
	</div>

	<h3 align="center">CALCULADORA</h3><br>
	<form action="index.php" method="POST">
		<b>Parámetro 1:</b>
		<input type="text" name="par1" id="par1" size="10">

		<b>Parámetro 2:</b>
		<input type="text" name="par2" id="par2" size="10">
		<b>Operador:</b>

		<select name="op" id="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="/">/</option>
			<option value="*">*</option>
		</select>

		<input type="button" name="enviar" value="Resultado" onclick="CalcularTotal();">
		<input type="text" name="res" id="res" size="15">

	</form>
</body>
</html>