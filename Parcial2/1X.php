<?php
var_dump($_POST);

$cal = (int)$_POST['txtCal']; 
var_dump($cal);
$xd= $cal + 1;
var_dump($xd);
$op = isset($_POST['txtOp']) ? $_POST['txtOp'] : 'No existe ';


$var = '';
$color = '';


/*
if ($cal > 5) {
	$var = "aprovado";
	$color = "Green";

} else{
	$var = "Reprovado";
	$color = "Red";

}*/

switch ($cal) {
	case 1:
	$var = "Te pasaste de frío";
	$color = "Red";

	break;

	case '7':
	$var = "Suficiente";
	$color = "Green";
	break;

	case $cal >= 8 && $cal <= 9:
	$var = "Crack";
	$color = "Green";
	break;

	case 10:
	$var = "Winner Winner chicken dinner";
	$color = "Gold";

	break;

	default:
	$var = "Reprovado";
	$color = "Red";
	break;
}



?>


<div style="text-align: center; color: <?=$color?>">
	
	<h1>  <?= $var ?></h1>

</div>