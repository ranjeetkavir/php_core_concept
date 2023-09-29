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
    $first_name="ranjeet";
    $last_name="kavir";
    $number=12345;
echo $first_name;
echo "<br>".$last_name;
echo "<br>".$number;

$a=array("firstname","lastname","number","email");
// echo "<br>".$a[3];

foreach($a as $value){
    echo "$value <br>";
}



///associative arrays //////


$b=array("name"=>"kvir","number"=>"8219750214","ass"=>"dad");

echo $b["number"];

//// multidimonsional array ///
echo "<br>";
$c=array(
    array("a","b"),
    array("c","d"),
    array("e","f"),
    array("c"=>"kavir",
    "web"=>"it",
    "num"=>"212"),

);
echo $c[3]["web"];

    ?>
</body>
</html>