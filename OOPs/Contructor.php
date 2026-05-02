<?php
//without contructor:

  echo "<h1> Function without contructor </h1>";

class Student{
    public $name;
    public $grade;
}
     $student1= new Student();
     $student2= new Student();
     $student3= new Student();

     $student1->name = "vasu";
     $student1->grade = 25;

    $student2->name = "saro";
    $student2->grade = 25;

  echo $student1->name;
  echo $student1->grade;
  echo $student2->name;
  echo $student2->grade;

  // with contructor

  echo "<h1> Function with contructor </h1>";
  class employee{
    public $name;
    public $role;
  
 public function __construct($name,$role){
    $this-> name= $name; // this defines the first match inside the function
    $this->role= $role;
 }  
  }
  $employee1= new employee("vasu","developer");
  $employee2= new employee("saro","developer");
  $employee3= new employee("Jerry","developer");

  echo $employee1->name ."<br>";
  echo $employee1->role ."<br>";
  echo $employee2->name ."<br>";
  echo $employee2->role ."<br>";
  echo $employee3->name ."<br>";


?>