<?php
include "header.php";
echo "<div class='contenedor'>";


/**
* Prácticas de Arrays

* 4. Crea una cadena en mayusculas, del abecedario, luego transforma en un array, y recorrelo mostrando su indice y su valor de forma descendente
*/

//array BIDIMENSIONAL



//Crea una lista de personas conocidas y la salida es un saludo
$personasConocidas=["Irina","Monico","Raul","Dani","Alvaro"];
foreach ($personasConocidas as $persona) {
    print_r("Hola, ¿Como estás $persona?<br>");
}

/*Crea una lista de paises y su abreviatura, por ejemplo ES=>España y según el país, indicamos el idioma.. Ej:
*ES es España y se habla español ES=>[pais=españa,idioma=español];
*/

$paises=["España"=>["Abreviatura"=>"ES","Idioma"=>"Español"],"Francia"=>["Abreviatura"=>"FR","Idioma"=>"Frances"], "Italia"=>["Abreviatura"=>"IT","Idioma"=>"Italiano"],"Alemania"=>["Abreviatura"=>"GER","Idioma"=>"Aleman"]];
foreach($paises as $clave=>$valor){
echo "<br>El nombre del País es: $clave <br>";
foreach ($valor as $clave=>$valor) {
    echo "$clave:$valor <br>";
}
}


echo "<br> 
<table>
<tr>
<th>País</th>
<th>Abreviatura</th>
<th>Idioma</th>
</tr>";
    foreach ($paises as $clave => $valor) {
            echo "<tr>";
            echo "<td>$clave</td>";
            echo "<td>{$valor['Abreviatura']}</td>";
            echo "<td>{$valor['Idioma']}</td>";
            echo "</tr>";
            echo "<br>";
        }
        echo "<br>";
echo "</table>";







echo "<br>";

//Crea un array de mascotas e indica x mascota la raza
$mascotas = [[
        'nombre' => 'Max',
        'tipo' => 'Perro',
        'raza' => 'Labrador Retriever'],
        ['nombre' => 'Luna',
        'tipo' => 'Gato',
        'raza' => 'Siamés'],
        ['nombre' => 'Rocky',
        'tipo' => 'Perro',
        'raza' => 'Pastor Alemán'],
        ['nombre' => 'Zara',
        'tipo' => 'Gato',
        'raza' => 'Persa'],
        ['nombre' => 'Cher',
        'tipo' => 'Perro',
        'raza' => 'Golden']];
foreach ($mascotas as $mascota) {
    echo "El nombre es : " . $mascota['nombre']."\n";
    echo"<br>";
    echo "Es de Tipo: " . $mascota['tipo'] . "\n";
    echo"<br>";
    echo "Y su Raza es: " . $mascota['raza'] . "\n";
    echo "<br><br>";
}


/* 4. Crea una cadena en mayusculas, del abecedario, luego transforma en un array, y recorrelo mostrando su indice y su valor de forma descendente*/
$abecedario="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
for($i=strlen($abecedario)-1; $i>=0; $i--){
    print_r($abecedario[$i]);
}

echo "<br>"."<br>";

$abecedario1="A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
$arrayAbecedario=explode(",",$abecedario1);
print_r($arrayAbecedario);
echo count($arrayAbecedario)-1;
echo "<br>";
for ($i=count($arrayAbecedario) - 1; $i >= 0; $i--) {
    echo "El $arrayAbecedario[$i] esta en la posición $i<br>";
}



echo "</div>";
include "footer.php"
?>