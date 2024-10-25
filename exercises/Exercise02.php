<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   

// Se declara una variable con un valor numérico. 
$today=8;
// U􀆟lizando una estructura switch/case
// genera un mensaje que indique a qué día de la semana se corresponde.
// a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
// con ningún día.
switch ($today) {
    case 1:
        # code...
        echo "Today is Monday";
        break;
    case 2:
        # code...
        echo "Today is Tuesday";
        break;
    case 3:
        # code...
        echo "Today is Wednesday";
        break;
    case 4:
        # code...
        echo "Today is Th";
        break;
    case 5:
        # code...
        echo "Today is Fri";
        break;
    case 6:
        # code...
        echo "Today is Sat";
        break;
    case 7:
        # code...
        echo "Today is Sun";
        break;
        
        default:
        # code...
        echo "The values does not correspond ...";
        
        break;
}



?> 
</body>
</html>