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
<form action="index-12.2associative-arrays.php" method="post">
    <label>Enter a country:</label>
    <input type="text" name="country">
    <input type="submit">
</form>
</body>
</html>

<?php
$capitals = array(
    "USA" => "Washington D.C",
    "Japan"=>"Kyoto",
    "South Korea"=>"Seoul",
    "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo "the capital is {$capital}";
?>