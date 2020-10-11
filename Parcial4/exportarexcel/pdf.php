<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM usuarios";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Titular</th>
		<th>Nombre del Tour</th>
		<th>Precio adulto</th>
		<th>Precio nino</th>
		<th>Total</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['codigo']; ?></td>
					<td><?php echo $row['titular']; ?></td>
					<td><?php echo $row['nombre_tour']; ?></td>
					<td><?php echo $row['precio_adulto_venta']; ?></td>
					<td><?php echo $row['precio_menor_venta']; ?></td>
					<td><?php echo $row['total']; ?></td>
				</tr>

			<?php
		}

	?>
</table>
