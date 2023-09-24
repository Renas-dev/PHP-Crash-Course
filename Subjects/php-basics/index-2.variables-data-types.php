<?php
    // Variable = a resuable container that holds data
    // string, integer, float, boolean

    //strings
    $name = "Renas Khalil";
    $food = "Pasta";
    $email = "fake123@gmail.com";

    //integers
    $age = 23;
    $users = 2;
    $quantity = 4;

    //floats
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    //boolean: True will display 1, false will display nothing
    $employed = true;
    $online = false;
    $for_sale = true;


//    echo "Hello {$name} <br>";
//    echo "You like {$food} <br>";
//    echo "Your email is {$email} <br>";
//
//    echo "you are {$age} years old <br>";
//    echo "There are {$users} users Online! <br>";
//    echo "You would like to buy {$quantity} Items <br>";
//
//    echo "Your gpa is: {$gpa} <br>";
//    echo "Your pasta is \${$price} <br>";
//    echo "The sales tax rate is: {$tax_rate}% <br>";
//
//    echo "Online status: {$online} <br>";

    $total = null;
    //we give this variable a null value cause we will declare its value later

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    //Here we are giving the $total variable some value by telling it that the $total variable == quantity times price;
    echo "Your total is: \${$total} <br>";
    //to display $ in php we use an escape sequence \$ so php does not get confused.
?>