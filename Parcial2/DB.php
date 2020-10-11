

<html>
<head>
	<title>.: Payment :.</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<?php 
	include "conexion.php";

	$arreglo= $con->query('SELECT id,product_code,product_name,category, list_price  from products'); 

	/*$inst= $con->query('INSERT INTO products  (product_code) values("nuevo producto")'); */



	?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>DB</h2>

				<form accept-charset="utf-8" method="POST">
					<input type="text" name="busqueda" id="busqueda" value="" placeholder="" maxlength="30" autocomplete="off" />
				</form>
				<div id="resultadoBusqueda"></div>

				<table class="table table-striped">

					<thead>
						<tr>
							<th># ID</th>
							<th>Codigo del producto</th>
							<th>Nombre del producto</th>
							<th>Categoria</th>
							<th>Precio</th>
							<th>Maicra</th>
						</tr>
					</thead>
					<?php foreach ($arreglo as $r){ // aca puedes hacer la consulta e iterarla con each.

						$xd = $r['list_price'];

						$cal = (int)$xd;



						switch ($cal ) {
							case  $cal < 5:
							$var = "Baraton";
							$color = "Green";
							break;

							case $cal >= 6 && $cal <= 10:
							$var = "Un presió rasonable";
							$color = "Blue";
							break;

							case $cal > 30:
							$var = "Esponja enloquesiste?";
							$color = "Yellow";
							break;

							default:
							$var = "Baraton";
							$color = "Green";

							break;
						}


						?> 

						<tr>
							<td><?php echo $r['id'] ?></td>

							<td><?php echo $r["product_code"]; ?></td>

							<td><?php echo $r["product_name"]; ?></td>

							<td><?php echo $r['category'] ?></td>

							<td><?php echo $r['list_price'] ?></td>

							<td style=" color: <?=$color?>"><?= $var ?></td>


						</tr>

					</tr>
					<?php

				}

				?>
			</table>
		</body>

		<script>
			function buscar() {
				var textoBusqueda = $("input#busqueda").val();
				
				if (textoBusqueda != "") {
					$.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
						$("#resultadoBusqueda").html(mensaje);
					}); 
				} else { 
					("#resultadoBusqueda").html('');
				};
			};
		</script>
		</html>https://mimentevuela.wordpress.com/2015/08/09/busqueda-instantanea-con-ajax-php-y-mysql/