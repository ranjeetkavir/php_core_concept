<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function loop(){
    $year = "2022";
     echo "hello kavir ";
     echo "copyright  ";
     echo $year;
     echo " website";
}

echo loop();


////function with parameter ///

function add($a,$b){
    echo" <br>multiplication";
    echo $a*$b;
    echo" <br>addition";
    echo $a+$b;
}

add(10,5);
add(100,5);
add(190,5);
?>
</body>
</html>