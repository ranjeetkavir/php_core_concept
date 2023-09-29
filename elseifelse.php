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

 $a=30;
if($a>=18 && $a<25){
    echo "u re teenage";
}
elseif($a>=25 &&$a<35){
    echo "u re adult";
}
elseif($a>=35 && $a<60)
{
    echo "u re old";
}
elseif($a>=60){
    echo "u re grandfather/mother";
}
else{
    echo "invalid";
}
?>
</body>
</html>