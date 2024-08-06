
<?php
include "header.php";
echo "<div class='contenedor'>";
    /*
    * PHP como todos los lenguajes, tiene mas de 1000 funciones integradas, pero tu puedes crear tus propias funciones
    */
    //función básica => identificador o nombre
    function saltar(){
        echo "<br>";
    }
    echo "Es una prueba";
    Saltar();
    SALTAR();//no recomendable!! poner saltar en vez de . No distingue mayuscula de minuscula
    echo "Despues del salto???";

    //Función con pase de parámetros
    function saltarYescribir($texto){
        echo "<br>$texto";
    }
    $linea=5;
    saltarYescribir("En un lugar de la mancha. Linea $linea");



    /*
     * Práctica: crea dos funciones que al pasar un texto, una lo devuelva en minúscula y la otra en mayúscula
     */
    function pasarAminuscula($texto){
        return strtolower($texto);
    }
    function pasarAmayuscula($texto){
        return strtoupper($texto);
    }
    $mensaje="Es una prueba de las funciones en PHP";
    saltarYescribir(pasarAminuscula($mensaje));
    saltarYescribir(pasarAmayuscula($mensaje));
    saltar();


    //En las funciones puedes enviar varios parámetros
    function registro($nombre,$apellido,$telefono){
        $registroAlumno=["nombre"=>$nombre,"apellido"=>$apellido,"telefono"=>$telefono];
        return $registroAlumno;
    }
    saltar();
    $registroGeneral[]=registro("Francisco","Gonzalez","651484015");
    print_r($registroGeneral);
    saltar();
    //array_push inserta los valores que le pases al final del array
    array_push($registroGeneral,registro("Susana","Osorio","676988222"));
    //La forma de inserta al final de igual manera que el
    saltar();
    $registroGeneral[]=registro("Alvaro","Osorio","676988333");
    print_r($registroGeneral);
    saltar();
    saltarYescribir("solo un alumno");
    print_r($registroGeneral[2]);

    Echo "
    <table>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Telefono</th>
    </tr>";
    foreach ($registroGeneral as $indice=>$valor){
        echo "<tr> <td>$indice</td>";
        foreach ($valor as $dato){
            echo "<td>$dato</td>";
        }
        echo "</tr>";
    }
    echo "</table>";




    //hacer funcion de una tabla de 4
    function tablaX4col($textoCol1,$textoCol2,$textoCol3,$textoCol4,$array){
        echo "
    <table>
    <tr>
    <th>$textoCol1</th>
    <th>$textoCol2</th>
    <th>$textoCol3</th>
    <th>$textoCol4</th>
    </tr>";
    foreach ($array as $indice=>$valor){
        echo "<tr> <td>$indice</td>";
        foreach ($valor as $dato){
            echo "<td>$dato</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    }
    saltarYescribir("******************");
    saltarYescribir("Tabla con funcion");
    tablaX4col("ID","Nombre","Apellido", "Telefono",$registroGeneral);


/**
 * Declaración de variables en el paso de parámetros
 */
    function sumar($a=5,$b=8){
        return $a + $b;
    }
    saltarYescribir(sumar());
    saltarYescribir(sumar(15,9));
    saltarYescribir(sumar(10));


    saltar();

    function sumarVarios()
    {
        $total=0; //inicializamos el total, por si no se le pasa ningun parametro
        for($i=0;$i<func_num_args();$i++){
            $total+=func_get_arg($i);
        }
        return $total;
    }
    saltarYescribir(sumarVarios(4,5,6,1,6));
    saltarYescribir(sumarVarios());
    saltarYescribir(sumarVarios(59+74));


    saltar();
/**
 * Paso de parametros por lista
 */
    function sumarLista(...$lista){//crea una lista tipo array del grupo de parametros que se pasa
        $total=0;
            //si necesito saber cuantos elementos tiene la lista
        saltarYescribir("ELEMENTOS=>".count($lista));
        foreach ($lista as $num) {//para poder acceder a cada valor, se debe recorrer el array
                $total += $num;
            }
        return $total;
    }
    saltarYescribir("Paso de parametros por lista");
    saltarYescribir("TOTAL=>".sumarLista(4,5,6,1,6));
    saltarYescribir("TOTAL=>".SumarLista());
    saltarYescribir("TOTAL=>".sumarLista(58,74));


    //include para incluir un documento fuera de este que hemos creado con php. muestrea.php
    saltarYescribir("<hr>");
    saltar();
    include "muestrea.php";
    saltarYescribir("<hr>");
    saltar();
//include_once lo incluye una vez si aun no se ha llamado
    saltarYescribir("<hr>");
    saltar();
    include_once "muestrea.php";
    saltarYescribir("<hr>");
    saltar();






    //saltarYescribir($total);//no puedes acceder a una variable que tiene ambito local dentro de una funcion.




    /*Ambitos de las variables dentro y fuera de la funcion*/
    saltarYescribir("Ambitos de las variables dentro y fuera de la funcion");
    $cadena1="Hola";
    $cadena2=", mundo";
    function unirCadena($cad1, $cad2)
    {
        return $cad1.$cad2;
    }
    saltarYescribir(unirCadena($cadena1,$cadena2));
    //el simbolo & antes de la variable que se pasa como parametro, indica que si es modificado el valor de esa
    //variable dentro de la función, también se modifica fuera de la funcion
    saltarYescribir("Paso de parametros por referencia '&'");
    function unirCadenasReferencia(&$cad1,$cad2)
    {
        $cad1="Lo que yo quiera ".$cad2;

    }
    unirCadenasReferencia($cadena1,$cadena2);//se ejecuta la funcion
    saltarYescribir($cadena1);//en este punto puedes comprobar como despues de llamar la función el valor de cadena1 cambio


    //El ambito de las variables Globales -> se declaran dentro la función como global, para acceder y modificar su valor
    $aula="AT1";
    function mostrarModificarAula()
    {
        global $aula; //ese valor puede ser manipulado dentro de la funcion
        $aula="AT1 pasillo 1";
    }
    //mostrar fuera de la función el valor de aula $aula
    mostrarModificarAula();
    saltarYescribir($aula);








echo "</div>";
include "footer.php"
?>



