<?php
include "header.php";
echo "<div class='contenedor'>";
    $cadenaOriginal= "Esto Es Una Cadena De Jose luis";
    print_r($cadenaOriginal);
    echo "<br>";
    $cadenaMinusculas = strtolower($cadenaOriginal);
    print_r($cadenaMinusculas);
    echo "<br>";
    $palabras = explode(' ',$cadenaMinusculas);
    sort($palabras);
    print_r($palabras);
    echo "<br>";
    $palabrasOrdenadas=implode(' ', $palabras);
    print_r($palabrasOrdenadas) ;



echo "</div>";
include "footer.php"
?>









