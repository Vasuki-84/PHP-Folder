<?php

// LOOPS

// 1. While loop:
$i=1;
while($i<=5){
    echo $i ."<br>";
    $i++;
    }

// 2. do-while loop:
        $f=2;
        do{
            echo $f ."<br>";
            $i++;
         }while($i<=5);

// 3. foreach loop:
    $colors=["red","blue","green"];
    foreach($colors as $color)
        {
        echo $color ."<br>";
        }

// 4. With key & value:
$student =["name"=> "vasu",
           "age"=>25,
           "course"=>"full stack"
          ];
foreach($student as $key => $value){
    echo $key. ":" .$value ."<br>";
}
?>