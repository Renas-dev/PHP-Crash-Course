<?php
    $age = 13;
    $citizen = true;

    if ($age >= 23 && $citizen){
        echo "You may vote<br>";
    } else {
        echo "You may not vote <br>";
    }

    $child = true;
    $senior = false;
    $ticket = null;

    if ($child  || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 12 * 1.15;
    }
    echo "Your ticket price is {$ticket} euros.";
?>