<?php

// String length
echo strlen("vasu")."<br>";

// word count
echo str_word_count("I am vasu")."<br>";

// reverse
echo strrev("Vasu")."<br>";

// search
echo strpos("I am vasu","vasu")."<br>";

// replace
echo str_replace("world","Vasu","Hello world")."<br>";

// case-conversion
echo strtoupper("Vasu");
echo strtolower("VASU")."<br>";

// trim spaces
echo trim("    vasu    ")."<br>";

// split to array
print_r(explode(" ","Vasu is easy"));
echo "<br>";

// Join array to string
$arr=["PHP", "is", "easy"];
echo implode("-",$arr)."<br>";





?>