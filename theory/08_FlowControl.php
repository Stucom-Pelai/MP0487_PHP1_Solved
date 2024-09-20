<!DOCTYPE html>
<html>

<body>

    <?php
    // STATEMENT IF
    // simple if
    $t = 14;
    if ($t < 20) {
        echo "Have a good day!";
    }

    // with AND
    $a = 200;
    $b = 33;
    $c = 500;
    if ($a > $b && $a < $c) {
        echo "Both conditions are true";
    }
    // with OR
    if ($a > $c || $a > $c) {
        echo "One condition is true";
    }

    // Ternary
    $a = 1;
    $b = $a < 2 ? "Hello" : "Good Bye";

    // if else(nested)
    $startYear = 70;
    $today;

    if (substr($today, 6, 2) <= $startYear) {
        $century = 21;
    } else {
        $century = 20;
    }

    // STATEMENT SWITCH
    switch ($day) {
        case 6:
            echo "Monday";
            break;
        case 7:
            echo "Tuesday";
        default:
            echo "Workday";
            break;
    }

    // LOOPS
    // for, when you know how many times you want to iterate.
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i<br>";
    }
    // while, repeats while a condition is true.
    $i = 1;
    while ($i <= 5) {
        echo "Number: $i<br>";
        $i++;  // Increment $i to avoid infinite loop
    }

    // do while, condition is checked after the loop, 
    // ensuring the loop runs at least once.
    $i = 1;
    do {
        echo "Number: $i<br>";
        $i++;
    } while ($i <= 5);

    // foreach, to iterate over arrays
    $fruits = ["Apple", "Banana", "Orange", "Mango"];

    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit<br>";
    }

    // break and continue in loops
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
            // continue;
        }
        echo "The number is: $x <br>";
    }
    ?>