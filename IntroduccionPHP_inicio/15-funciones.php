

declare(strict_types = 1) ; 
<?php include 'includes/header.php';

function sumar( int $numero1 = 0  , int $numero2 = 0 ) {
    echo $numero1 + $numero2 ; 
}


echo "<br>";
sumar(numero1: 10 , numero2:30); //nombre las funciones 
echo "<br>";
sumar(5,5);
echo "<br>";
sumar(40,5);
echo "<br>";
//sumar('hola'); // declare marca el error ;
include 'includes/footer.php';