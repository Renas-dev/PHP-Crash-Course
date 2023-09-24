<?php
    // Arithmetic operators
    // + - * / ** %
    $x = 10;
    $y = 3;
    $z = null;

    //$z = $x + $y; = 13
    //$z = $x - $y; = 7
    //$z = $x * $y; = 30
    //$z = $x / $y; = 3,3333
    //$z = $x ** $y; = 1000
    //$z = $x % $y; = 1
    //echo $z;

    //Increment/decrement operators
    // ++, --
    // to increment we do ++ to add 1 / to decrement we do -- to remove 1
    // to add or remove a set value we do += or -=
    $counter = 0;
    $counter-=3;
    //echo $counter;

    // Operator Precedence
    //()
    //**
    //* / %
    //+ -
    // above is the order on how php solves math equations
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;

?>