<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="Lab46.php" method="post">
        <label>Introduzca un valor par: </label>
        <input type="number" name="num" id="">
        <button type="submit" name="send">Enviar</button>
    </form>
    <?php
    if (array_key_exists("send", $_POST)) {
        if (intval($_POST["num"]) % 2 == 0) {
            $tam = intval($_POST['num']);
            for ($i = 0; $i < $tam; $i++) {
                for ($j = 0; $j < $tam; $j++) {
                    if ($i == $j) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                }
                echo "</br>";
            }
        } else {
            
            header('location: Lab46.php');
        }
    }
    ?>
</body>

</html>
