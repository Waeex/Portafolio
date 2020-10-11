<style>


	table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
}

</style>
<?php
$alumnos[0] = array("1","14","8","3");
$alumnos[1] = array("6","19","7","2");
$alumnos[2] = array("3","13","4","1");
?>
<table>
	<tr>	<td><?=$alumnos[0][0]." Este es el numero de estudiantes que estan en el nivel basico de ingles "."<BR/>"; ?></td>
	<td><?=$alumnos[0][1]." Este es el numero de estudiantes que estan en el nivel basico de frances "."<BR/>";?></td>
	<td><?= $alumnos[2][2]." Este es el numero de estudiantes que estan en el nivel basico de aleman "."<BR/>";?></td>
	<td><?= $alumnos[2][3]." Este es el numero de estudiantes que estan en el nivel basico de ruso "."<BR/><BR/>";?></td>
</tr>
<tr>
	<td><?= $alumnos[1][0]." Este es el numero de estudiantes que estan en el nivel medio de ingles "."<BR/>";?></td>
	<td><?= $alumnos[1][1]." este es el numero de estudiantes que estan en el nivel medio de Frances"."<BR/>";?></td>
	<td><?= $alumnos[1][2]." este es el numero de estudiantes que estan en el nivel medio de Aleman"."<BR/>";?></td>
	<td><?= $alumnos[1][3]." este es el numero de estudiantes que estan en el nivel medio de Ruso"."<BR/><BR/>";?></td>
</tr>
<tr>
	<td><?= $alumnos[2][0]." Este es el numero de estudiantes que estan en el nivel avanzado de ingles "."<BR/>";?></td>
	<td><?= $alumnos[2][1]." este es el numero de estudiantes que estan en el nivel avanzado de Frances"."<BR/>";?></td>
	<td><?= $alumnos[2][2]." este es el numero de estudiantes que estan en el nivel avanzado de Aleman"."<BR/>";?></td>
	<td><?= $alumnos[2][3]." este es el numero de estudiantes que estan en el nivel avanzado de Ruso"."<BR/><BR/>";?></td>
</tr>
</table>