<?php
    $porcentaje = $_POST['porce'];
    if ($porcentaje >= 80 or $porcentaje == 100 ) {
        echo "<img src='img/capture.png' alt='error'>";
    }
    elseif ($porcentaje >= 50 or $porcentaje == 79 ) {
        echo "<img src='img/less.png' alt='error'>";
    }
    elseif ($porcentaje <= 49 or $porcentaje >= 1){
        echo "<img src='img/sad.png' alt='error'>";
    }
?>