<?php include 'includes/header.php';

$nombre = 'Patxi' ;
echo $nombre ;
var_dump($nombre);

define('Constante','Este es el valor de la constante') ;
//echo $Constante ---> Nos da un error porque crea un identificador de la constante y no una constante en si 
echo Constante ; //Manera correcta de imprimir las valeriales declaradas con "define" ;


const Constante2 = "Constante 2" ; // Otra manera de declarar constantes mas parecida a JavaScript.Esta sintaxis no es la comun.
echo Constante2 ; 


$nombreCliente = "Pedro";
$nombre_Cliente = "Pedro";  // --->  En php esta es la forma mas usada de declarar variables, contrario a JavaScript que es el CamelCase ;

include 'includes/footer.php';