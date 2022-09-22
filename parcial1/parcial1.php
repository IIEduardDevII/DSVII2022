<?php
echo "<table border=1>";
if (array_key_exists("send", $_POST) ) {
$num = (int)$_POST["num"];

        if($num % 2 == 0 and $num >= 6){

            $tam = intval($_POST['num']);
            for ($i = 0; $i < $tam; $i++) {
                echo "<tr>";

                for ($j = 0; $j < $tam; $j++) {
                    echo "<td>";
                    if ($i == $j) {
                        echo rand(1, 100);
                    }else{
                        echo 0;
                    }
                    echo "</td>";
                }
                echo "</br>";
                echo "</tr>";
            }

        }else{
            echo "Ingrese un numero par igual o mayor que 6";
            header('parcial1.html');
        }
} else {
    echo "No se encontro el archivo deseado";
}
echo "</table>";
?>
