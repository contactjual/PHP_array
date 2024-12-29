<?php

// array declaretions...............................................

// $my_array = array("psc", "jsc", "hsc"); // or
$my_array = ["psc", "jsc", "hsc"];


// use var_dump () to know about the array...

// var_dump ($my_array);

echo "<pre>";
var_dump ($my_array);
echo "</pre>";


// use prinf_r() to know about the array...

echo "<pre>";
print_r($my_array);
echo "</pre>";




// Array Manipulation....................................................

$fruits = ['Apple', 'Banana', 'Orenge', 'Pineapple'];
echo print_r($fruits) ."<br>";

echo $fruits[0] ."<br>";
$fruits[0] = 'Mango' ."<br>"; // replace
$fruits[4] = 'Mango' ."<br>"; // added in 4 index
$fruits[] = 'Lemon' ."<br>"; // added in last index
unset($fruits[1]); // deleted the 1 number index's value

echo print_r($fruits) ."<br>";


?>