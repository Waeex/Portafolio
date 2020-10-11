<?php
$segundo = array(
array("1","14","8","3"),
array("6","19","7","2"),
array("3","13","4","1"),
);
echo $segundo[0][0]."Este es el numero de estudiantes que estan en el nivel basico de ingles "."<BR/>";
echo $segundo[0][1]."este es el numero de estudiantes que estan en el nivel basico de Frances"."<BR/>";
echo $segundo{0}{2}."este es el numero de estudiantes que estan en el nivel basico de Aleman"."<BR/>";
echo $segundo{0}{3}."este es el numero de estudiantes que estan en el nivel basico de Ruso"."<BR/><BR/>";

echo $segundo[1][0]."Este es el numero de estudiantes que estan en el nivel medio de ingles "."<BR/>";
echo $segundo[1][1]."este es el numero de estudiantes que estan en el nivel medio de Frances"."<BR/>";
echo $segundo{1}{2}."este es el numero de estudiantes que estan en el nivel medio de Aleman"."<BR/>";
echo $segundo{1}{3}."este es el numero de estudiantes que estan en el nivel medio de Ruso"."<BR/><BR/>";

echo $segundo[2][0]."Este es el numero de estudiantes que estan en el nivel avanzado de ingles "."<BR/>";
echo $segundo[2][1]."este es el numero de estudiantes que estan en el nivel avanzado de Frances"."<BR/>";
echo $segundo{2}{2}."este es el numero de estudiantes que estan en el nivel avanzado de Aleman"."<BR/>";
echo $segundo{2}{3}."este es el numero de estudiantes que estan en el nivel avanzado de Ruso"."<BR/><BR/>";
?>
