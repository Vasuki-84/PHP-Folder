<?php

// Arrow function = Arrow functions in PHP are the shorter version of anonymous functions.
$sum = fn($a,$b)=> $a+$b;
echo $sum(2,3) ."<br>";


// closure as arrow function
$name = "vasu";
$sample=fn()=> "Hai $name <br>";
echo $sample();

// Array with array function
$nums = [1,2,3];

$result = array_map(fn($x) => $x * 2, $nums);
echo "<pre>";
print_r($result);
echo "</pre>";
?>