<?php include 'includes/header.php';

$numero1 = 20 ;
$numero2 = 30 ;

$numero3 = 20 ;
$numero4 = "30" ;

var_dump($numero1 > $numero2) ; 

echo "<br>" ;


var_dump($numero1 >= $numero2) ;


echo "<br>" ;


var_dump($numero1 <= $numero2) ;


echo "<br>" ;


var_dump($numero1 == $numero3) ;


echo "<br>" ;


var_dump($numero2 == $numero4) ;


echo "<br>" ;


var_dump($numero2 === $numero4) ;



echo "<br>" ;

//1 si izquierda es Mayor 
var_dump($numero2 <=> $numero3) ;


echo "<br>" ;

//Cero si son iguales 
var_dump($numero1 <=> $numero3) ;

echo "<br>" ;

//Menos 1 si izquierda es menor
var_dump($numero1 <=> $numero2) ;



include 'includes/footer.php';