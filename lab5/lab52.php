<?php
error_reporting(-1);
ini_set("display_errors", 1);

// Recibimos el archivo
if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name']))
{

    $nombre_archivo = $_FILES['nombre_archivo_cliente']['name'];
    $tipo_archivo = $_FILES['nombre_archivo_cliente']['type'];     
    $tamano_archivo = $_FILES['nombre_archivo_cliente']['size'];
    $nombreDirectorio = "archivos/";
    $nombreCompleto = $nombreDirectorio.$nombre_archivo;

    $volumen_min = "5120";           // volumen minimo en bit - 5120 = 5 kb 
    $volumen_max = "1048576";       // volumen maximo en bit - 1048576 = 1 MB 

    $vol_archi = round($tamano_archivo / 1024, 2);    // Volumen archivo en Kb redondeado a dos decimales
    $extension = substr(strrchr($nombre_archivo, "."), 1);    // Extraemos la extension del archivo

     
    $archivo_permitido1 = "image/jpeg";  // tipo 1 de archivo permitido   
    $archivo_permitido2 = "image/gif";       // tipo 2 de archivo permitido   
    $archivo_permitido3 = "image/jpg";       // tipo 3 de archivo permitido 
    $archivo_permitido4 = "image/png";       // tipo 4 de archivo permitido
     
    if ($tamano_archivo >= $volumen_min AND $tamano_archivo <= $volumen_max AND    
    ($tipo_archivo == $archivo_permitido1 OR $tipo_archivo == $archivo_permitido2 OR 
    $tipo_archivo == $archivo_permitido3 OR $tipo_archivo == $archivo_permitido4))  
    {  
        

            if (is_file($nombreCompleto)) 
            {
                $idUnico = time();
                $nombre_archivo = $idUnico."-".$nombre_archivo;
                echo "Archivo repetido, se cambiara el nombre a $nombre_archivo <br><br>";
            }
                move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio.$nombre_archivo);
                echo "Archivo subido satisfactoriamente al directorio <br>";
    } else 
    {
    echo "El archivo no es del tipo ($tipo_archivo) o volumen permitido ($vol_archi Kb)";
    }

} else {
    echo "Debe adjuntar algún archivo";
}
?>