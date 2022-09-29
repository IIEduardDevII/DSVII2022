<?php
	include('class/class_83.php');
	$num = $_POST['num'];
	$max=max($num);
	$mayor = new Mayor($num,$max);
	$resul=$mayor->mostrar_mayor();

?>
<title> Laboratorio 8.3 </title>
<form method='post' action='indexLab83.php'>
	<input type='submit' name='' value='Inicio'>
</form>
