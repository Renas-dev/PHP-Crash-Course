<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index-5.1math-functions.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x =   $_POST["x"];
    $y =   $_POST["y"];
    $z =   $_POST["z"];
    $total = null;

    //$total = abs($x); abs gives the absolute number so if I input -14 total will echo 14
    //$total = round($x); Rounds up the number so 3.14 = 3 / 3.8 = 4
    //$total = floor($x); floor will always round down so 3.99 = 3
    //$total = ceil($x); will always round up, so 3.1 = 4
    //$total = pow($x, $y); will do to the power to so 3 to the power of 4 = 82
    //$total = sqrt($x); will do the square root of a number so 100 = 10
    //$total = max($x, $y, $z); will return the highest number, so if we have 30/20/10 30 gets returned
    //$total = min($x, $y, $z); returns the minimum of a number so 10/20/30 gets 10 returned
    //$total = pi(); returns pi 3,14
    //$total = rand(); if left empty it will return a rand number between 1 - 2.1b u can give it 1, 6 to simulate a dice for example
    echo $total;
?>