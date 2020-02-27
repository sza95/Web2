<?php

$myArray = ['HTML','CSS','PHP'];
// Access to specific position
echo $myArray[2];

//Other way to create an array
$myArray2 = array('CSS','JavaScript',344234.12);

//Printing Arrays
echo "<br>";

echo $myArray2[2];

echo "<br>";
//Printing an array
print_r($myArray);

echo "<br>";
//Other way to print an array
var_dump($myArray2);

//Adding elements to an array
$myArray[]=20;
//Other way to add elements to an Array
echo "<br>";
array_push($myArray,'Java',30);

var_dump($myArray);

//Associative Arrays
$myArray3 = array(
    'name' => 'Juan',
    'lastname' => 'Zabala');
echo "<br>";
print_r($myArray3);
echo "<br>";
echo $myArray3['name'];
echo "<br>";
foreach($myArray as $key => $element){

    echo "<li>".$element.", position "."<b>".$key."</b>"."</li>";
}
?>