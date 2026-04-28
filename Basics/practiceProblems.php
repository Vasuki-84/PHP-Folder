<?php
// Odd or Even
$num=24;
if($num%2 == 0){
    echo "EVEn";
}else{
    echo "Odd";
}

// Sum of array-elements
$arr = [1,2,3,4];
$result=0;

for($i=0;$i<count($arr);$i++)
{
    $result += $arr[$i];

}
    echo "total sum" .$result;

?>