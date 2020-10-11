
<?php

include 'navbar.php';
$alumnos = array(
 array("alumno"=>"Jaiba", "automovil"=>"no" , "computadora"=>"sí", "telefono"=>"sí",
  "casa propia"=>"No", "estado civil"=>"Peruano", "ingreso mensual"=>"5000 chelines"),
 array("alumno"=>"Miguel", "automovil"=>"sí" , "computadora"=>"sí", "telefono"=>"sí",
  "casa propia"=>"No", "estado civil"=>"soltero", "ingreso mensual"=>"1000 dlls"),
 array("alumno"=>"balam", "automovil"=>"no" , "computadora"=>"sí", "telefono"=>"No",
  "casa propia"=>"sí", "estado civil"=>"H", "ingreso mensual"=>"5000 euros"),
 array("alumno"=>"bryan", "automovil"=>"sí" , "computadora"=>"No", "telefono"=>"sí",
  "casa propia"=>"sí", "estado civil"=>"casado", "ingreso mensual"=>"256000 bolivares"),
 array("alumno"=>"luis", "automovil"=>"no" , "computadora"=>"sí", "telefono"=>"sí",
  "casa propia"=>"sí", "estado civil"=>"soltero", "ingreso mensual"=>"999 quetzales"),
 array("alumno"=>"lalo", "automovil"=>"no" , "computadora"=>"sí", "telefono"=>"sí",
  "casa propia"=>"No", "estado civil"=>"viudo", "ingreso mensual"=>"5 peso"),
 array("alumno"=>"jeinkins", "automovil"=>"sí" , "computadora"=>"sí", "telefono"=>"No",
  "casa propia"=>"sí", "estado civil"=>"casado", "ingreso mensual"=>"1000 rupias")
);

if (count($alumnos) > 0): ?>

 <table class="table table-dark">
   <thead>
     <tr>
      <th>alumno</th>
      <th>automovil</th>
      <th>computadora</th>
      <th>telefono</th>
      <th>casa propia </th>
      <th>estado civil</th>
      <th>ingreso mensual</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($alumnos as $row): array_map('htmlentities', $row); ?>
     <tr>
       <td><?php echo implode('</td><td>', $row); ?></td>
     </tr>
   <?php endforeach; ?>
 </tbody>
</table>
<?php endif; 


?>