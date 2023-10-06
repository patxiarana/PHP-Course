<?php include 'includes/header.php';
/*
$cliente  = array('Pedro', 'Juan', 'Karen') ; 


foreach($cliente as $cliente) {
    echo $cliente ."<br>" ; 
} ; 


$cliente = [
    'nombre' => 'Patxi',
    'saldo'  => 200,
    'tipo'  => 'Premium'
] ; 


foreach($cliente as $key => $valor) {
    echo  $key. "-" .$valor ."<br>" ; 
} ; */

$productos = array(
    array(
        'nombre' => 'Producto 1',
        'precio' => rand(10, 50), // Genera un precio aleatorio entre 10 y 50
        'disponibilidad' => true // Genera un valor booleano aleatorio (0 o 1)
    ),
    array(
        'nombre' => 'Producto 2',
        'precio' => rand(10, 50),
        'disponibilidad' => false
    ),
    array(
        'nombre' => 'Producto 3',
        'precio' => rand(10, 50),
        'disponibilidad' => true
    )
);

foreach($productos as $producto) { ?>
    <li>
    <p>Producto : <?php echo $producto['nombre'] ; ?> </p>
    <p> Precio  :  <?php echo $producto['precio']  ; ?> </p>
    <p> <?php echo ($producto['disponibilidad'] ? 'Disponible' : 'no disponible'); ?>
    <?php /*
    if($producto['disponibilidad']) {
        echo  '<p>Disponible<p>' ; 
    } else {
        echo  '<p>No Disponible<p>' ; 
    } ; 
    ?>
    </li>
    */ 
  
  echo "<pre>";
  var_dump($producto);
  echo  "<pre>" ; 

}





include 'includes/footer.php';