<?php
    // if statement = if some condition is true, do something
    //if condition is false, don't do it.

    //$age = 101;
//    if($age >= 100){
//    echo "You are way too old to enter this site";
//    }
//    else if ($age >= 18) {
//        echo "u are {$age} years old, u may enter the site";
//    }
//    else if($age <= 0){
//        echo "That wasn't a valid age";
//    }
//    else {
//        echo "you are {$age} years old, u must be 18+ old to enter.";
//    } displaying if / else if / else statements here

//    $adult = true;
//
//    if($adult) {
//        echo "You may enter this site";
//    } else {
//        echo "You must be an adult to enter";
//    }

    $hours = 50;
    $rate = 15;
    $weeklyPay = null;

    if($hours <=0){
        $weeklyPay = 0;
    }
    else if($hours <=40){
        $weeklyPay = $hours* $rate;
    }
    else {
        $weeklyPay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weeklyPay} This week";

?>