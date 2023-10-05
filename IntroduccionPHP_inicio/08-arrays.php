<?php include 'includes/header.php';

//Estilo de crear Arreglos en laravel 
$array = ['tablet', 'television', 'computadora'] ;

//Util para ver los contenidos de un array
echo "<pre>" ; 

var_dump($array) ; 

"<pre>" ; 

//Acceder a un elemento del array 
echo $array[1] ; 

// Añade un elemento en el indice tres del arreglo
$array[3] = 'Nuevo Producto' ; 




echo "<pre>" ; 

var_dump($array) ; 

"<pre>" ; 


// Añade un elemnto con push al final del arreglo 

array_push($array, 'Audifono') ; 


//AñAdir al inicio 

array_unshift($array, 'samartwatch') ; 



echo "<pre>" ; 

var_dump($array) ; 

"<pre>" ; 

//Estilo de crear Arreglos en wordpresss

$cliente = array('cliente1', 'cliente2', 'cliente3') ;

echo "<pre>" ; 

var_dump($cliente) ; 

"<pre>" ; 


include 'includes/footer.php';