<?php
    $date = date("l");

    switch ($date){
        case "Monday":
            echo "I hate Mondays";
            break;
        case "Tuesday":
            echo "I love Tuesday!";
            break;
        default:
            echo "invalid date";
    }
?>