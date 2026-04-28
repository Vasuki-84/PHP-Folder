<?php

// Higher order functions = the functions that accepts other functions as arguments or returns a function.
// Why we use HOR?   
// => reusability ,  Avoid repeating loops , Clean & maintainable code.

// example 1: callback as argument
function Data($numbers , $callback){
    foreach($numbers as $n){
        echo $callback($n) ."<br>";
    }
}
Data([1,2,3],function($x){
    return $x * $x. " ";
});

// Example 2: Function pass by name
function Greet($name){
    return "hello $name";

}
function display($callback, $value){
    echo $callback($value);
}
display("Greet","Vasu");







?>