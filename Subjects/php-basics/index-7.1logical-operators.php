<?php
/*  Logical operators = combine conditional statements
 *  If(condition && condition2)
 *
 *  && = True if both conditions are true
 *  || = True if at least one of the condition is true
 *  !  = true if false. false if true.
**/

    $temp = 15;
    $cloudy = true;

//    if($temp >- 0 && $temp <= 30){
    if($temp < 0 || $temp > 30){
        echo "The weather is bad!<br>";
    }
    else {
        echo "The weather is good.<br>";
    }

    if (!$cloudy){
        echo "It's sunny!";
    }
    else {
        echo "It's cloudy";
    }
?>