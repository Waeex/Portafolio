
<html>
<head>
	<title>Calculadora</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="jquery-1.4.2.js"></script>
  	<script src="json2.js"></script>
  	<script type="text/javascript">
		function CalcularTotal()
		{
			var par1 = $("#par1").val();
			var par2 = $("#par2").val();
			var op = $("#op").val();
 
			/*Solicitamos el resultado con AJAX seg�n el m�todo POST*/
			/*como par�metro (por POST) se env�a el par1, par2 y op.*/
			$.post("calculadora.php", {par1: par1, par2: par2, op: op}, function(resultado){
				$("#res").val(resultado);
			}, "json"); /*El par�metro "json" indica que la respuesta desde PHP es en formato JSON*/
		}
  	</script>
</head>
<body>
  <h3 align="center">CALCULADORA</h3>
  <form action="calculadora.php" method="POST">
    <table border="1" align="center" width="400px" cellpadding="4">
    <tr>
		<td><b>Par�metro 1:</b></td>
		<td>
			<input type="text" name="par1" id="par1" size="10">
		</td>
    </tr>
    <tr>
		<td><b>Par�metro 2:</b></td>
		<td>
			<input type="text" name="par2" id="par2" size="10">
		</td>
    </tr>
    <tr>
		<td><b>Operador:</b></td>
		<td>
			<input type="text" name="op" id="op" size="5">
		</td>
    </tr>
    <tr>
		<td colspan="2" align="center">
		  <input type="button" name="enviar" value="Resultado" onclick="CalcularTotal();">
		</td>
    </tr>
    <tr>
		<td colspan="2" align="center">
		  <input type="text" name="res" id="res" size="15">
		</td>
    </tr>
    </table>
 
  </form>
</body>
</html>