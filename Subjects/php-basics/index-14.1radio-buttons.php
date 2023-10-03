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
<form action="index-14.1radio-buttons.php" method="post">
    <label>
        <input type="radio" name="credit_card" value="ING">
    ING <br>
    </label>
    <label>
        <input type="radio" name="credit_card" value="Rabobank">
        Rabobank <br>
    </label>
    <label>
        <input type="radio" name="credit_card" value="Abn">
        ABN-Amro Bank <br>
    </label>
    <input type="submit" name="confirm" value="confirm">

</form>
</body>
</html>

<?php
    if (isset($_POST["confirm"])){

        if (isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "you selected {$credit_card}";
        }
        else{
            echo "Please select a credit card";
        }
    }
?>