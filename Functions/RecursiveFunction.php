<?php


// Recursive function = function calling itself
// A function calls itself until a condition stops it.


function countdown($n){
    if($n <= 0){
        return;
    }

    echo $n . "<br>";
    countdown($n - 1);
}

countdown(5);



?>