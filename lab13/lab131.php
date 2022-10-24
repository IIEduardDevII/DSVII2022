<?php
    if (isset($_COOKIE['contador'])) 
    {
        setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
        $mensaje = 'Gracias por visitarnos. Numero de visitas: ' . $_COOKIE['contador'];
    } else {
        // TODO caduca en un año
        setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
        $mensaje = 'Bienvenido a nuestro sitio Web';
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Contador de visitas con Cookies</h1>
    <h3><?php echo $mensaje; ?></h3>
</body>
</html>