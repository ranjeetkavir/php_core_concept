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

    ///// simple way class object show ////
class student{
    
    function fun1(){
        echo "fun1";
    }
    function fun2(){
        echo "func2";
    }
}
$obj=new student();
$obj->fun1();
echo"<br>";
$obj->fun2();


echo "<br>";
echo"below another class and object example:-|";
echo "<br>";

//////// adding variable in class object /////
class class1{
    public $x=1;
    function fun3(){
        return $this->x++;
    }
    function fun4(){
        return $this->x+5;
    }
    
    
}
$obj1=new class1();
$obj2=new class1();
$obj3=new class1();
$obj1->fun3();
echo "obj1:-".$obj1->x;
echo "<br/>";
$obj2->fun3();
echo"obj2:-".$obj2->x;
echo "<br/>";
$obj3->fun4();

echo "obj3:-".$obj3->x;



// $obj->fun1();
// echo"<br>";
// $obj->fun2();





?>
</body>
</html>