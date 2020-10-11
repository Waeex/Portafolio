<?php
$alumnos[0] = array("1","14","8","3");
$alumnos[1] = array("6","19","7","2");
$alumnos[2] = array("3","13","4","1");
echo $alumnos[0][0]."Este es el numero de estudiantes que estan en el nivel basico de ingles "."<BR/>";
echo $alumnos[0][1]."Este es el numero de estudiantes que estan en el nivel basico de frances "."<BR/>";
echo $alumnos[2][2]."Este es el numero de estudiantes que estan en el nivel basico de aleman "."<BR/>";
echo $alumnos[2][3]."Este es el numero de estudiantes que estan en el nivel basico de ruso "."<BR/><BR/>";

echo $alumnos[1][0]."Este es el numero de estudiantes que estan en el nivel medio de ingles "."<BR/>";
echo $alumnos[1][1]."este es el numero de estudiantes que estan en el nivel medio de Frances"."<BR/>";
echo $alumnos{1}{2}."este es el numero de estudiantes que estan en el nivel medio de Aleman"."<BR/>";
echo $alumnos{1}{3}."este es el numero de estudiantes que estan en el nivel medio de Ruso"."<BR/><BR/>";

echo $alumnos[2][0]."Este es el numero de estudiantes que estan en el nivel avanzado de ingles "."<BR/>";
echo $alumnos[2][1]."este es el numero de estudiantes que estan en el nivel avanzado de Frances"."<BR/>";
echo $alumnos{2}{2}."este es el numero de estudiantes que estan en el nivel avanzado de Aleman"."<BR/>";
echo $alumnos{2}{3}."este es el numero de estudiantes que estan en el nivel avanzado de Ruso"."<BR/><BR/>";
?>