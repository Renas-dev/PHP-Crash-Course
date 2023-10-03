<?php
/**
 *  Functions = write some code once, resue when you need it
 *  Type () after function name to invoke
 *  ex. add(), subtract(), multiply(), divide()
*/

function happy_birthday($name, $age) {
    echo "Happy birthday {$name}! <br>";
    echo "Happy birthday to you {$name}! <br>";
    echo "Happy birthday {$name}! <br>";
    echo "You are {$age} years old! <br>";
    return;
}

//happy_birthday($name = "Renas", $age = 21);

function is_even($number){
    return $number % 2;
}
//echo is_even(11);

function hypotenuse ($a, $b) {
    $c = sqrt($a **2 + $b ** 2);
    return $c;
}
echo hypotenuse(4, 5);
?>