<?php
$n = $_POST['n1'];
$message = " El factorial de ".$n. " es: ";
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    }
 
    return $n * factorial($n - 1);
}
 
echo $message.factorial($n);
?>