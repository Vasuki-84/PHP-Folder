<?php
require "Namespaces1.php";
use College\Student as common;
use function College\greet as wish;

$obj = new common();
$obj-> info();
echo "<br>";

echo " namespace with use and function: <br>";
wish();






?>