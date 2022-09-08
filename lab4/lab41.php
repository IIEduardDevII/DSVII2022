<?php
    $porcentaje = $_POST['porce'];
    if ($porcentaje >= 80 or $porcentaje == 100 ) {
        echo "<img src='capture.png' alt='error'>";
    }
    elseif ($porcentaje >= 50 or $porcentaje == 79 ) {
        echo "<img src='less.png' alt='error'>";
    }
    elseif ($porcentaje <= 49 or $porcentaje >= 1){
        echo "<img src='sad.png' alt='error'>";
    }
?>