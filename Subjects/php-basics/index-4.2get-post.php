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
    <form action="index-4.2get-post.php" method="post">
    <label>quantity: </label> <br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
    <! We're making a POST request in our html where the user can enter a quantity and click the submit button and see the total of what they got.-->
</body>
</html>

<?php
    $item = "pasta";
    $price = "5.99";
    //pre defining the item and price of set quantity
    $quantity = $_POST["quantity"];
    // in the variable $quantity we store our $_POST request quantity
    $total = null;
    //we make a $total variable and give it a NULL value since this variable will always be different cause of it being tied to the users input.
    $total = $quantity * $price;
    // here we define $total by telling it the total price = quantity * price.
    echo "You have ordered {$quantity} x {$item}s <br>";
    echo "Your total is: \${$total}";
    // here we echo our results for our POST requests ( to add a $ in php as text we have to \$ )
?>