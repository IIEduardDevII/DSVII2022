<html>

<head>
     <title>Laboratorio 8.3</title>
</head>

<body>
     <form name="formularioDatos" method="post" action="Lab83.php">
          <?php
for ($i=1; $i <= 20; $i++)
{
	echo "<br/> Introduzca el numero ". $i. ":";
?>
          <input type="text" name="num[]" value=""><br>
          <?php
}
?>
          <input value="Calcular" type="submit" />
     </form>
</body>

</html>
