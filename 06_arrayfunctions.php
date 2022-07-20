<?php
 

 //for array manipulation

 $alcohos = ['keg', 'brandy', 'whiskey', 'vodka'];

 //array length

 echo count($alcohos);

 //search in array

 var_dump(in_array('keg', $alcohos));

 echo in_array('keg', $alcohos);

 //add element

 $fruttyloops = ['ova', 'apple', 'passion', 'banana'];

array_push($fruttyloops, 'strawberry');

print_r($fruttyloops);

$fruttyloops[]='jeff';

print_r($fruttyloops);

//adding to beginning fo array

array_unshift($fruttyloops, 'beetroot');

print_r($fruttyloops);

//remove (lifo)
array_pop($fruttyloops);

//remove from beginning
array_shift($fruttyloops);

//remove specific element

unset($fruttyloops[1]); //unset removes index as well

//concatenating arrays

$arr1= [34, 45, 12];
$arr2= ['jeff', 'doe', 'glo'];

$arra3= array_merge($arr1, $arr2);

print_r($arra3);


