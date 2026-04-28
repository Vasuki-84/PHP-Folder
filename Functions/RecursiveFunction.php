<?php


// Recursive function = function calling itself
// A function calls itself until a condition stops it.

// countdown
function countdown($n){
    if($n <= 0){
        return;
    }

    echo $n . "<br>";
    countdown($n - 1);
}

countdown(5);


// factorial
function fact($x){
    if($x==1) return 1;
   return $x*fact($x-1);
}
echo "Factorial:" .fact(3);

?>