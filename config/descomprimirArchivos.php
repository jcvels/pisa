<?php

function descomprimirArchivos()
{
    $zip = new ZipArchive;  // Declaramos el fichero a descomprimir, puede ser enviada desde un formulario
    $comprimido= $zip->open('pisa_last_release.zip');
    
    if ($comprimido=== TRUE)
    {
        $zip->extractTo('../PRUEBA/');
        $zip->close();
        echo 'El fichero se descomprimio correctamente!';
    } 
    else
    {
        echo 'Error descomprimiendo el archivo zip';
    }

}

descomprimirArchivos();

?>

