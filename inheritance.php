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
class class1{
    function __construct(){
        echo "construct1";
    }
    function fun1(){
        echo "fun1";
    }
}
    class class2 extends class1{

    }
$obj=new class2();
$obj->fun1();

echo "<br>";

////////// inheritance example ////

// class class1{
//     function __construct(){
//         echo "construct1";
//     }
//     function fun1(){
//         echo "fun1";
//     }
// }
//     class class2 extends class1{
//         function __construct(){
//             echo "construct2";
//         }
//         function fun1(){
//             echo "fun2";
//         }
//     }
// $obj=new class2();
// $obj->fun1();






?>
</body>
</html>