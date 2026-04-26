<?php
// In PHP not need to tell the datatype
echo "<br>";
$x = "string";
$y=12;
$z=12.9;

$d=$y+$z;

echo "sum:" .$d. "<br>";

// 4 Variables scope in PHP:
// 1. Local scope:
function Local(){
    $name="vasu";
    echo "hai" .$name ."<br>";
}
Local();

// 2. Global scope:
  $her="vasu";
function display(){
    global $her;
    echo "Global keyboard:" .$her,"<br>";
    echo "Global array to declare global variable:" .$GLOBALS['her'], "<br>";
    echo $GLOBALS['her'],"<br>";
}
display();

// 3. Static variable scope:
function show(){
    static $number= 1;
    echo $number. "<br>";
    $number++;
}
show();
show();
show();

// 4. Function varaiable scope:
function greet($name){
    echo "Heloo $name <br>";
}
greet("vasu");

// varibles in quotes:
$city="erode";
// double quotes:
echo "I live in $city";  // works
// single quotes:
echo 'I live in $city'; // not works











?>


