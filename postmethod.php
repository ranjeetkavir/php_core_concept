<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="postmethod.php" method="post">
<input type="text"name="fname"placeholder="enter fname">
<input type="text"name="lname"placeholder="enter lname">
<input type="submit">
</form>
<?php
print_r($_POST);
?>

</body>
</html>