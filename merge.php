<?php

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$i = 0;
$arr1[] = $array2[$i];
for ($j = $i; $j < count($array1); $j++){
    $arr1[] = $array1[$i][$j];
}

$i = 1;
$arr2[] = $array2[$i];
for ($j = 0; $j < count($array1); $j++){
    $arr2[] = $array1[$i][$j];
}

$arr[] = $arr1;
$arr[] = $arr2;

echo "<pre>";
print_r($arr);

?>