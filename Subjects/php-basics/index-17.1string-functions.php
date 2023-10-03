<?php
    $usernames = "Renas von Khalil";
    $name = array("Renas", "Von", "Khalil");
    $phone = "036-12345678";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username); removes white space in between
    //$username = str_pad($username, 200, "meows"); adds 200 chars of meows behind
    //$phone = str_replace("-", " ", $phone); first argument searches what to replace, second with what u want to replace, then declare it again
    //$username = strrev($username); reverses the string
    //$username = str_shuffle($username); shuffles the string randomly everytime u refresh or echo
    //$equals = strcmp($username, "Renas Khalil"); compares strings to each other and shows if they are equal or not and returns this value
    //$count = strlen($username); shows how many chars the str has
    //$index = strpos($username, "a"); first argument is where u want to search, then what u want search returns the value of the match
    //$firsnamte = substr($username, 0, 5); creates a new str from an existing str first is start index second ending index
    $usernames = explode(" ", $usernames); // creates and array from a string
    $name = implode($name); // creates a string from array

    foreach ($usernames as $username){
        echo $username . "<br>";
    }
    echo $name
?>