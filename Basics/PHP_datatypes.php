<?php 
echo "datypes in PHP";

// 1. String: 
$doubleQuotes = "Vasu";
$singleQuote = 'vasu';
// 2. Integer
$number = 24;
$number1= 30305;
// 3. Float( Double):
$price = 34.56;
// 4. Boolean:
$active= true;
$inActive = false;
// 5. Array
$colors = ["red","green","blue","orange"];
$user=["name"=> "vasu","age"=>25];
// 6. Object
class student{
    public $name="Jerry";
}
$obj= new student();
echo $obj->name;
// 7. NULL
$value= null;


// Checking Datatypes
$age=25;
var_dump($age);


?>