<?php
$nombre = "Diego";
var_dump($nombre);
$nombre = 10;
var_dump($nombre);
$nombre = TRUE; //True, true
$nombre = FALSE; //False, false
var_dump($nombre);
$nombre = "20"."10";
var_dump($nombre);


$nombre = null; //0, -0 => FALSE, 1 => TRUE
var_dump((bool) $nombre);

$numero = 1.2e3;
var_dump($numero);

$nombre = "Diego";

$arrayUsuarios = [
    [
        "Nombre" => "Diego Ojeda",
        "Edad" => 28,
        "Genero" => "Masculino",
        "Peso" => 55.8,
        "Administrador" => false
    ],
    [
        "Nombre" => "Juan Valdez",
        "Edad" => 50,
        "Genero" => "Masculino",
        "Peso" => 69.8,
        "Administrador" => true
    ],
];

var_dump($arrayUsuarios);

foreach ($arrayUsuarios as $usuario){
    echo $usuario['Nombre']."</br>";
}

// Corto de una sola linea
/*
 * Comentario de varias lineas
 */
# Tambien sirve para comentar una linea
//echo 'Hola $nombre </br>';//Comillas Simples
//echo "Hola ".$nombre;   //Comillas Dobles
/*if ($nombre == "Diego"){
    echo "Hola ".$nombre;
}else if($nombre == "Juan"){
    echo "Hola Juan";
}else{
    echo "Hola Usuario";
}*/
?>


<?php

class Usuario {

    // boolean, integer, float, string.
    // array, object, callable, iterable
    // resource y null
    private string $nombre = "Diego";

}
