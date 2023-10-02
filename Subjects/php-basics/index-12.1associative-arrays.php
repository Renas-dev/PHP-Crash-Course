<?php
/**
 * Associative array = An array made of key=> value pairs
 *
 *  countries => capitals
 *  id => username
 *  item => price
*/

    $capitals = array(
        "USA" => "Washington D.C",
        "Japan"=>"Kyoto",
        "South Korea"=>"Seoul",
        "India"=>"New Delhi");


    //$capitals["USA"] = "Las Vegas";
    //$capitals["Netherlands"] = "Amsterdam";
    //    array_pop($capitals);
    //    array_shift($capitals);
    // array_flip($capitals;
    //$capitals = array_reverse($capitals);
    //echo count($capitals);
/**   $keys = array_keys($capitals);

    foreach ($keys as $key){
    echo "{$key} <br>";
    }
*/

$values = array_values($capitals);

foreach ($values as $value){
    echo "{$value} <br>";
}

//    foreach ($capitals as $key => $value){
//        echo "{$key} = {$value} <br>";

    //}
?>