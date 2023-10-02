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

<form action="index-8.1switches.php" method="get">
    <label>grade: <br>
    <input type="text" name="grade"><br>
    <input type="submit" value="check grade">
    </label>
</form>
</body>
</html>
<?php
    /**
     * Switch = replacement to using many elseif statements
     * It's more efficient, and make it so u have less code to write
     */
    $grade = strtoupper($_GET["grade"]);
    switch ($grade){
        case "A":
            echo "U got a {$grade} for ur test! You scored  great!";
            break;
        case "B":
            echo "U got a {$grade} for ur test! You scored good!";
            break;
        case "C":
            echo "U got a {$grade} for ur test! You scored okay!";
            break;
        case "D":
            echo "U got a {$grade} for ur test! You scored poorly!";
            break;
        case "F":
            echo "U got a {$grade} for ur test! You scored horrible!";
            break;
        default:
            echo "Hey your {$grade} did not match any grades in our system.";
    }

?>