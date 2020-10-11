<html>
<head>
	<title>.: Payment :.</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php include "navbar.php"; ?>
	<?php include "conexion.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>db</h2>

				<table class="table table-striped">

					<thead>
						<tr>
							<th># ID</th>
							<th>Fecha</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<?php foreach ($con->query('SELECT id_person,name,date from person AS p INNER JOIN pay AS pay ON p.address=pay.id_person ORDER BY date DESC LIMIT 3') as $r){ // aca puedes hacer la consulta e iterarla con each. ?> 
					<tr>
						<td><?php echo $r['id_person'] ?></td>
					
						<td><?php echo $r["date"]; ?></td>

						<td><?php echo $r['name'] ?></td>

					</tr>

				</tr>
				<?php
				$a= $r['id_person'];
				var_dump($r);
			$array = array("$a");
			}
				var_dump($array);
			?>
		</table>
