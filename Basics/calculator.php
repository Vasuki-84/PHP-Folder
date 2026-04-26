<?php

// simple calculator:
$a=10;
$b=20;

function add($a,$b)
{
     return $a + $b;
}
add(10,20);
function sub($a,$b)
{
       return $a - $b;
}
sub(30,10);
function multiply($a,$b)
{
   return $a * $b;
}
multiply(25,5);
function div($a,$b)
{
       return $a / $b;
}
div(25,5);

echo "----- Calculator Results -----<br>";
echo "Addition: " . add($a, $b) . "<br>";
echo "Subtraction: " . sub($a, $b) . "<br>";
echo "Multiplication: " . multiply($a, $b) . "<br>";
echo "Division: " . div($a, $b) . "<br><br>";



// student grade calculator:
$mark1 = 78;
$mark2 = 85;
$mark3 = 90;

$total=$mark1+$mark2+$mark3;
$average=$total/3;

if($average >=90){
     $grade = "A";
}else if($average >=75){
    $grade = "B";
}else if($average >=50){
     $grade = "C";
}else{
     $grade = "Fail";
}

echo "=====student grade calculation===== <br>";
echo "Toatal marks: " .$total ."<br>";
echo "Average : "  .number_format($average,2 )  ."<br>";
echo "Grade : " .$grade ."<br>" ;


?>