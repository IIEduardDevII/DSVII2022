<?php

$values = Array(
    15,
    6,
    17,
    94,
    8,
    69,
    11,
    66,
    35,
    97,
    8,
    28,
    72,
    85,
    98,
    74,
    11,
    88,
    73,
    91
);

$valor =  max($values);
$indice =  array_search($valor, $values);
echo "En la posicion ".$indice.", el mayor valor es ".$valor;
for ($i=0; $i < count($values); $i++) { 
    print_r('<br>');
    print_r($values[$i]);
}



//se setea el indice (i) para que inicie desde 1
/*for ($i=1; $i < 7; $i++) { 
    $values[] = $valor;
}*/

?>
