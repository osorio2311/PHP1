<?php
include "header.php";
echo "<div class='contenedor'>";

    $array=[1,2,3,4,2,3,4,2,1,6,7,3,2,7,11,3,6,3,6,8,0];
    echo "Array Original <br>";
    print_r($array);
    echo "<br>";
    $arrayContador=array();
    foreach ($array as $valor){
        if(array_key_exists($valor,$arrayContador)){
            $arrayContador[$valor]=$arrayContador[$valor]+1;
        }else{
            $arrayContador[$valor]=1;
        }
    }
    echo "<br>";
    ksort($arrayContador);
    print_r($arrayContador);
    echo"<br>Contador de veces que se repiten los numeros<br>";
    foreach ($arrayContador as $clave=>$valor){
        echo "El número $clave se repite $valor ".($valor==1?"vez":"veces"),"<br>";
    }





echo "</div>";
include "footer.php"
?>
