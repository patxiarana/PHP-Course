<?php include 'includes/header.php';

// in_array buscar elementos en un arreglo 

$carrito = ['tablet','computadora','television'] ; 


var_dump(in_array('tablet', $carrito));
var_dump(in_array('audifonos', $carrito));

echo "<br>" ;

//Ordenar los elementos de un arreglo 
$numeros = [1,2,6,8,4] ; 

sort($numeros) ; // De menor a mayor 
rsort($numeros) ; // de mayor a menor 


echo "<pre>" ; 
 
var_dump($numeros) ; 

echo "<pre>" ; 


//Ordenar arreglo asociativo 

$cliente = array(
    'saldo' => 200 , 
    'tipo' => 'premium' , 
    'nombre' => 'juan'
) ; 

echo "<pre>" ; 
 
var_dump($cliente) ; 

echo "<pre>" ; 

asort($cliente) ; //Ordena por valores (orden alfabetico)
arsort($cliente) ;   //Ordena por valores (orden alfabetico invertido)
ksort($cliente) ; // Ordena por llaves (orden alfabetico)
krsort($cliente); // Ordena por llaves (orden alfabetico invertido)
echo "<br>"; 
echo "<pre>" ; 
 
var_dump($cliente) ; 

echo "<pre>" ; 
include 'includes/footer.php';