<?php include 'includes/header.php';

function sumar( int $numero1 = 0  , int $numero2 = 0 ) {
    echo $numero1 + $numero2 ; 
}

sumar(5,5);
echo "<br>";
sumar(40,5);
echo "<br>";
sumar();
echo "<br>";
sumar(25,30);
echo "<br>";

include 'includes/footer.php';