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
        $this->num=1;
    }

}
$obj=new class1();
$obj->num=2*2;// here we can change value class1 construct ///
echo $obj->num;

///////////////// protected mode using but not accesss values //////
echo "<br>";
// class class2{

//     protected $num;
//     function __construct(){
//         $this->num=1;
//     }

// }
// $obj=new class2();
// $obj->num=2;
// echo $obj->num;

//// using protected mode value access //////
echo "<br>";
class class3{

    protected $num;
    function __construct(){
        $this->num=1;
    }
    function getnum(){
        return $this->num;
    }

}
$obj=new class3();
// $obj->num=2;
echo $obj->getnum();

?>
</body>
</html>