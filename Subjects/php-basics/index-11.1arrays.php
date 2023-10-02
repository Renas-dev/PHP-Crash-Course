<?php
    // array  = "variable" which can hold more than one value at a time

    $foods = array("Apple", "Banana", "Coconut", "orange", "pineapple");

    //$foods[0] = "milk";
    //array_push($foods, "grapefruit", "kiwi");
    //array_pop($foods);
    //array_shift($foods);
    //$reversed_foods = array_reverse($foods);
    echo count($foods) . " food items in the array: . <br>";

    foreach ($foods as $food){
        echo $food . "<br>";
    }
?>