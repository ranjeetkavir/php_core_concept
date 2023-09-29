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

////// construct destruct simple way show ////

class class1{


    function __construct(){
        echo "start";
    }
        function fun1(){
            echo "hello";
        }
    
    function __destruct(){
        echo "end";
    }
}
$obj1= new class1();
$obj1->fun1();

////// construct destruct with parameter values ////
echo "<br>";
class std{


    function __construct($y){
        $this->x=$y;
    }
        function fun5(){
            echo $this->x;
        }
    
    function __destruct(){
        echo "end";
    }
}
$obj2= new std(20);
$obj2->fun5();





?>
</body>
</html>