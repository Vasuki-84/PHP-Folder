<?php 
echo "datypes in PHP: <br>";

// 1. String: 
$doubleQuotes = "Vasu";
$singleQuote = 'vasu';
// 2. Integer
$number = 24;
$number1= 30305;
// 3. Float( Double):
$price = 34.56;
print "<br>" .$price ."<br>";

// 4. Boolean:
$active= true;
$inActive = false;

print "<br>" .$active ."<br>";

// 5. Array
$colors = ["red","green","blue","orange"];
print_r($colors) ;
echo "<br>".$colors[1] ."<br>";


$user=["name"=> "vasu","age"=>25];
print_r($user);
echo "<br>";
echo $user["name"] ."<br>";

// 6. Object
class student{
    public $name="SAro";
    public $age=24;

}
$obj= new student();
echo $obj->name ."<br>";
echo "<pre>";
print_r($obj);
echo "</pre>";
print($obj->name);

// 7. NULL
$value= null;


// Checking Datatypes
$age=25;
var_dump($age);


?>