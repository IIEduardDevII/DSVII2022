<html>

<head>
	<title>Laboratorio 8.5</title>
</head>

	<body>
		<fieldset>
			<legend> Configuracion de Inputs </legend>
			<form method="post" action="indexlab85.php">
				<input type="text" name="cantidad">
				<input type="submit" name="" value="Generar">
			</form>
		</fieldset>
		<form name="formularioDatos" method="post" action="lab85.php">
			<?php
				if (isset($_POST['cantidad'])){ ?>
			<?php
		if (($_POST['cantidad'] % 3) == 0)
		{
		for ($i=1; $i <= $_POST['cantidad']; $i++)
		{
			echo "<br/> Introduzca un numero par ". $i. ":";
		?>
			<input type="text" name="num[]" value=""><br>

			<?php
		}
		?>
			<input value="Enviar" type="submit" />
			<?php
		}
	    else
	        {echo ("Debe ser un numero divisible entre 3");}
	    }
	?>
		</form>
	</body>

</html>