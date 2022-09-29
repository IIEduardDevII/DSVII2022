<?php
	include('class/class_85.php'); 
	$num = $_POST['num'];
	$contador=0;
	$suma=0;
	$op = new operacion($num,$contador,$suma); 
	$resul=$op->calc_operacion(); 
?>
<title> Laboratorio 8.5 </title>
<form method="post" action="indexlab85.php">
	<input type="submit" name="" value="Inicio">
</form>