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





// Find array length...................... count() function................ 

$check_length = count($fruits);
echo $check_length;





// Associative Array.....................................................

$key_value_array = [  // added key and value
    'name' => 'Jual', 
    'age' => 19, 
    'isLoggedIn' => true
];

print_r($key_value_array);

// loop ...

foreach ($key_value_array as $x => $y) {
    echo "<br>". $x .": ". $y ."<br>";
};






// array sorting... 

$array_sort = ["Apple", "Banana", "Orenge", "Mango"];
sort($array_sort); // array is sorted from first alpabet
foreach ($array_sort as $x) {
    echo "$x <br>";
}

rsort($array_sort); // array is sorted from last alpabet
foreach ($array_sort as $x) {
    echo "$x <br>";
}

rsort($array_sort); // array is sorted from last alpabet
foreach ($array_sort as $x) {
    echo "$x <br>";
}


$number = [12, 23, 4, 6, 77, 8, 10];
sort($number); // array is sorted form lower number
foreach($number as $x) {
    echo "$x <br>";
}

$number = [12, 23, 4, 6, 77, 8, 10];
rsort($number); // array is sorted form heigher number
foreach($number as $x) {
    echo "$x <br>";
}


$person_age = [
    "Jual" => 19,
    "Rana" => 15,
    "Kolil" => 40,
    "Jolil" => 64
];
asort($person_age); // ages are sorted
foreach ($person_age as $name => $age) {
    echo "$name is $age years <br>";
}

ksort($person_age); // keys are sorted
foreach ($person_age as $name => $age) {
    echo "$name is $age years <br>";
}





// PHP Multidimensional Arrays...

$my_multy_array = [
    $inner_arr1 = ["sdkfo", "jdoe", "jdfo"],
    $inner_arr2 = ["ad", "obe", "pho"],
    $inner_arr3 = [22, 45, 67]
];
// echo $my_multy_array[0][1]; // jdoe

// looping..
for ($a = 0; $a < count($my_multy_array); $a++) {
    for ($s = 0; $s < count($my_multy_array[$a]); $s++) {
        echo $my_multy_array[$a][$s] ."<br>";
    }
}



?>