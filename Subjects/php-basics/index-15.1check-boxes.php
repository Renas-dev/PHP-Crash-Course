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
    <form action="index-15.1check-boxes.php" method="post">
        <label>
            <input type="checkbox" name="foods[]" value="Pasta">
            Pasta<br>
        </label>
        <!--We create a $foods array in the name attribute,we can acces this array later with out post variable-->
        <label>
            <input type="checkbox" name="foods[]" value="Hot-dog">
            Hot-dog<br>
        </label>
        <label>
            <input type="checkbox" name="foods[]" value="Hamburger">
            Hamburger<br>
        </label>
        <label>
            <input type="checkbox" name="foods[]" value="Taco">
            taco<br>
        </label>
        <label>
            <input type="submit" name="Submit">
        </label>
    </form>
</body>
</html>


<?php

    if(isset($_POST["Submit"])){
        $foods = $_POST["foods"];
    foreach($foods as $food){
        echo $food . "<br>";
    }
    }/**
 * With our if statement we first check if a checkbox is clicked.
 * we do this with the isset function. in the isset we grab our post variable with the value submit.
 * we create a foods array where the values will be the values we set im our html input tag undervalue=""
 * after the array has been created we make a for each statement for our foods as food, and echo this.
 */
?>