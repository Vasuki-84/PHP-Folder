<?php
class student{
public $name;
public $age;

public function details(){
    echo "Hai Students: <br>";
}
}

$data = new student();
$data->name = "vasu";
$data->age = 25;


$data->details();
echo $data->name ."<br>";
echo $data->age;




?>