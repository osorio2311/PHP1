
<?php
include "header.php";
echo "<div class='contenedor'>";


    /* Las dos formas de declarar un array*/
    $docente=array();//array vacio
    $hombres=array("José Luis","Mónico","Andres","Dani","Juan","Sergio","Raul");
    $mujeres=["Monica","Marina","Tania","Arantxa","Alba","Ana"];

    //funcion count muestra el numero de elementos / longitud del array
    echo "Hombres->".count($hombres)."<br>";
    echo "Mujeres->".count($mujeres)."<br>";
    echo "Docentes->".count($docente)."<br>";
    $docente[20]="Irina";
    //var_dump muestra la información de una variable
    var_dump($docente);
    echo "<br>";
    $hombres[]="Francisco";//inserta un nuevo valor en la última posición
    $hombres[]=16;
    var_dump($hombres);
    echo "<br>";
    for ($i=0; $i < count($mujeres) ; $i++) {
        echo "mujer con el indice nº $i es $mujeres[$i]<br>";
    }

    $vocales="aeiou"; //los string son como array, pero determinar su longitud utilizamos strleng
    for ($i=0; $i < strlen($vocales) ; $i++) {
        echo "$vocales[$i] - ";
    }
    echo "<br>";

    /* Array asociativos  clave => valor*/
    $alumnoEmpresa=["Apigon"=>"Andres","Elite"=>"Alba","Ikonox"=>"Marina,Tania","CEAT"=>"Dani", "Ecode"=>"Sergio", "Getecom"=>"Raul,Jose Luis,Monico"];
    $alumnoEmpresa2=["Apigon"=>"Andres","Elite"=>"Alba","Ikonox"=>["Marina","Tania"],"CEAT"=>"Dani", "Sergio", "Getecom"=>["Raul","Jose Luis","Monico"]];
    echo "<br>";
    var_dump($alumnoEmpresa);
    echo "<br>";
    var_dump($alumnoEmpresa2);
    echo "<br>";
    var_dump($alumnoEmpresa);

    echo "<br> El alumno de Elite es ". $alumnoEmpresa['Elite'];
    // echo "<br> El alumno de Ikonox es ". $alumnoEmpresa2['Ikonox']; ->Esto seria un error, porque es un array

    //Para recorrer y si quieres mostrar los valores de un array asociativo, debes utilizar el bucle foreach
    foreach ($alumnoEmpresa as $valor) {
        echo "<br>$valor";
    }
    foreach ($alumnoEmpresa as $clave =>$valor){
        echo "<br>Empresa $clave - Alumno $valor";
    }


    /* Práctica: crea un array con los meses del año y la estación que le corresponda a cada uno */
    $mesesAnio=["Enero"=>"Invierno","Febrero"=>"invierno","Marzo"=>"Primavera","Abril"=>"Primavera","Mayo"=>"Primavera","Junio"=>"Verano","Julio"=>"Verano","Agosto"=>"Verano","Septiembre"=>"Otoño","Octubre"=>"Otoño","Noviembre"=>"Otoño","Diciembre"=>"Invierno"];

    $mesesAnio1=["Invierno"=>"Diciembre,Enero,Febrero","Primavera"=>"Marzo,Abril,Mayo","Verano"=>"Junio,Julio,Agosto","Otoño"=>"Septiembre,Octubre,Noviembre"];

    echo"<br>";
    foreach ($mesesAnio as $clave =>$valor) {
        echo "<br> El mes de $clave es $valor<br>";
    }

    foreach ($mesesAnio1 as $clave =>$valor) {
        echo "<br> La estación del año $clave tiene los meses de: $valor<br>";
    }


    //Funciones de Arrays
    /* unset() -> Elimina un elemento informando su posición o si indicas el array, borra el array completo*/
    $basura=[1,2,3,4,5,6,7,8,9,10];
    echo "<br>";
    var_dump($basura);
    unset($basura[5]);
    echo "<br>";
    foreach ($basura as $numero) {
        echo "$numero <br>";
    }
    unset($basura); //Elimando el array
    // var_dump($basura); DA ERROR PORQUE SE ELIMINO EN LA LINEA ANTERIOR

    print_r($hombres); //muestra el contenido del array en formato string sin los datos que te muestra el var_dump

    echo "<br>";
    $basura=[1,2,3,4,5,6,7,8,9,10];
    unset($basura[5]);
    print_r($basura);
    echo "<br>";
    $basura2=array_values($basura);
    print_r($basura2);

    //comparar dos arrays y en un tercer array guardar los elementos del primero que no están en el segundo
    $numeros=[5,10,15,2,8,1];
    $diferenciaArray=array_diff($numeros,$basura);
    echo "<br>";
    print_r($diferenciaArray);

    //rellenar un array con un valor indicado array_fill-> inicio, posiciones, valor
    $docentes=array_fill(0,19,"Docente"); //inicializar
    $docentes[19]="Irina";
    echo "<br>";
    print_r($docentes);

    //Buscar un índice en un array->Si existe Apigon, indico que la empresa es una imprenta, sino, indico que no participa en el dual
    if(array_key_exists("Apigon",$alumnoEmpresa)){ //el metodo devuelve un true o false, y busca en el array la clave que le solicita
        echo "<br> Apigon participa en el dual y es una imprenta";
    }else{
        echo "<br> Apigon no participa en el dual";
    }

    //buscar en un array la clave de un valor
    echo "<br>";
    $clave=array_search("Dani",$alumnoEmpresa);
    echo "<br> $clave";

    //ordenar un array por su indice alfabeticamente-> sort()
    sort($hombres); //cambia el orden del array
    sort($mujeres);
    echo "<br>";
    print_r($hombres);
    echo "<br>";
    print_r($mujeres);

    echo "<br>";
    //ordenar un array por sus claves
    ksort($alumnoEmpresa); //ordena por clase de orden ascendente
    print_r($alumnoEmpresa);
    echo "<br>";
    krsort($alumnoEmpresa); //ordena por clave de orden descendente
    print_r($alumnoEmpresa);

    echo "<br>";
    //obtener una parte de un array indicando la posición
    print_r(array_slice($hombres,3,4));
    echo "<br>";

    //implode  y  explode
    //implode convierte un array en un string
    $frase=["En","un","lugar","de","la","Mancha"];
    print_r(implode(" ",$frase));
    echo "<br>";
    var_dump($frase);
    echo "<br>";
    //explode convierte un string en un array donde se le indica el elemento separador
    $nombres="Marina,Pedro,Juan,Luis";
    print_r(explode(",",$nombres));

    echo "<br>";


    //array BIDIMENSIONAL
    $agenda=["Dani"=>["Tfno"=>"666666666","Email"=>"dani@ceatformacion.com"],"Sergio"=>["Tfno"=>"77777777","Email"=>"sergio@ceatformacion.com"], "Ana"=>["Tfno"=>"88888888","Email"=>"ana@ceatformacion.com"]];
    foreach($agenda as $clave=>$valor){
        echo "<br>Nombre del contacto $clave <br>";
        foreach ($valor as $clave2=>$valor2) {
            echo "$clave2 : $valor2 | ";
        }
    }








echo "</div>";
    include "footer.php"
    ?>
