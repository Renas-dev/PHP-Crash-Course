<?php
/**
 * isset()= Returns TRUE if a variable is declared and not null
 * empty() = Returns TRUE if a variable is not declared, false, null,  ""
 */

    $username = false;

    echo isset($username);

    if(empty($username)){
        echo "this variable is empty";
    }
    else {
        echo "this variable is NOT empty";
    }

?>