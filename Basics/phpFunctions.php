<?php 

// Basic functions
function welcomeMessage(){
    echo "hai to PHP <br>";

}
welcomeMessage();

// function with parameters
function greet($name){
    echo "Hello" .$name ."<br>";
}
greet("vasu");

// function with return value;
function add($a,$b){
    return $a+$b;
    

}
echo (add(2,3)) ."<br>";

// default parameter values:
function wish($name="defaultParameter"){
    echo "Wecome to : " .$name ."<br>";

}
wish();
wish("assigned parameter");

// passing by reference:
function salary(&$bonus){
    $bonus+=5000;

}
$empSalary=20000;
salary($empSalary);
echo $empSalary ."<br>";



// Variable arguments:
function totalMarks(...$marks){
    return array_sum($marks);
}
echo totalMarks(80,90,95);


?>