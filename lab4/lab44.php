<?php
$numero = $_POST['num'];
$TAM = 10;
if ($numero%2==0) {
        for ($i=0; $i <= $TAM; $i++) {
            if ($numero%2==0) {
                echo $numero;
            }
            /*echo "
            <form>
            <fieldset>
                <legend>$i</legend>
            </fieldset>
            </form>
            ";*/
        }
}else{
    echo "Introduce un valor par, por favor.";
    header("lab44.html");
}

?>
<a href="lab44.html">Volver</a>