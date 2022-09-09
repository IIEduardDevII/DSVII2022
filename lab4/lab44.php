<?php
$numero = $_POST['num'];
$TAM = 10;
if ($numero%2==0) {
        for ($i=0; $i <= $TAM; $i++) {
            echo "
            <form>
            <fieldset>
                <legend>Hola</legend>
            </fieldset>
            </form>
            ";
        }
}else{
    echo "Introduce un valor par, por favor.";
    header("lab44.html");
}


{ ?> <p>Aqui es un php</p> <?php }

?>
<a href="lab44.html">Volver</a>