<?php

// Anonymous functions = A function without name
$sample = function(){
  return "Hello Anonymous function <br>";
};
echo $sample();

// Anonymous function with parameter
$sample1 = function($num){
  return "hai  $num <br>";
};
echo $sample1("vasuki");

// Closure = anonymous function that captures outside variables
$name= "closure";
$sample2= function() use ($name){
  return "Hello $name";
};
echo $sample2();

?>