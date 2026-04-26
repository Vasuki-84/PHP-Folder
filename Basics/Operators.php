<?php
//1.  Arithmatic operators
$a=10;
$b=20;

echo $a+$b ."<br>";
echo $a-$b ."<br>";
echo $a*$b ."<br>";
echo $a/$b ."<br>";
echo $a%$b ."<br>";

//2. Assignment operators
$num = 30;

echo "add & assign: " . ($num += 10) . "<br>";
echo "sub & assign: " . ($num -= 10) . "<br>";
echo "multiply & assign: " . ($num *= 10) . "<br>";
echo "divide & assign: " . ($num /= 10) . "<br>";
echo "concatenate & assign: " . ($num .= 10) . "<br>";

// 3.comparison operators
echo 5== '5';
echo 5==='5'; // if result is false it shows nothing in output
echo 5!=0;
echo 5!==8;
echo 5>3;
echo 5<9;

// 3. Increment / Decrement operators
$d=3;
echo ++$d;
echo $d++;
echo --$d;
echo $d--;





?>