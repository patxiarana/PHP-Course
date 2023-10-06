<?php include 'includes/header.php';

// For 
for ($i = 1; $i <= 5; $i++) {
    echo "Iteración número: $i<br>";
}

// Do While 
$num = 1;
do {
    echo "El número es: $num<br>";
    $num++;
} while ($num <= 5);

// While
$num = 1;
while ($num <= 5) {
    echo "El número es: $num<br>";
    $num++;
}
//Fizz BUZZ

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}






include 'includes/footer.php';