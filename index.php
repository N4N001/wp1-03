<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>    
<?php
    $r = rand(0,100);
    $r_squared = $r * $r;
    $define('PI',3.14);
    $area = 2 * 'PI' * $r_squared;
    $circuit = 'PI' * $r;
    echo "Obsah kruhu je $area cm2";
    echo "Obvod kruhu je $circuit cm";
?>

</body>

