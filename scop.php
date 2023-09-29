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

$a="kavir ";//// global variable access or run inner or outside function ///

function k(){

global $a; // here global word use access inner globalvariable ///
echo "global variable:".$a;

$b="rk";////   local variable inner function run not outside /////
echo "<br> local variable:".$b;

}
k();

?>
</body>
</html>