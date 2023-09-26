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
            echo "You scored did great! u got a {$grade} for ur test!";
            break;
        case "B":
            echo "You scored did good! u got a {$grade} for ur test!";
            break;
        case "C":
            echo "You scored did okay! u got a {$grade} for ur test!";
            break;
        case "D":
            echo "You scored did poorly! u got a {$grade} for ur test!";
            break;
        case "F":
            echo "You scored did horrible! u got a {$grade} for ur test!";
            break;
        default:
            echo "Hey your {$grade} did not match any grades in our system.";
    }

?>