<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// 1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:
$number1 = 14;
$number2 = 15;

// 2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
// primera con un bucle for.

for ($i=0; $i <= $number1 ; $i++) { 
    # code...
    if ($i%2==0) {
        # code...
        echo $i . ",";

    }
}
echo "<br>";
// 3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
// while.
// while ($number2 >= 0) {
//     # code...
//     echo $number2 . ",";
//     --$number2;
// }
do {
    # code...
    echo $number2 . ",";
    --$number2;
} while ($number2 >= 0);





?>
    
</body>
</html>