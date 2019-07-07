<?php
$a = array(
    'name' => 'Jeff',
    'lastName' => 'Almanzar'

);

//printing all elements in the array
echo implode(', ', $a) . "\n";

//size of the array
echo count($a) . "\n";

//appending to array
$a['age'] = 22;
echo implode(', ', $a) . "\n";

//removing from array
unset($a['age']);
echo implode(', ', $a) . "\n";

//sorting
$people = ['Jeff', 'Ismael', 'Esmeralda', 'Arrianny', 'Beba'];
echo "before sorting: \n";
echo implode("\n ",$people);
echo "after sorting: \n";
sort($people);
echo implode("\n ", $people);

//reversing
rsort($people);
echo "\nReversing:";
echo implode("\n",$people);

//checking if a key exits
echo "\n---------------------\n";
echo array_key_exists("name", $a);

//checking if a value exits
echo "\n---------------------\n";
echo in_array("Jeff", $people);

//indexing
echo "\n---------------------\n";
echo $a['name'];
echo "\n---------------------\n";
echo $people[0];

//more methods
$anotherArr = array();
//adding to the end
array_push($anotherArr, 'Jeff');
//adding to the beginning
array_unshift($anotherArr,"Isma");

//removing
array_shift($anotherArr); //remove the first
array_pop($anotherArr); //remove the last 

/*
unset removes key and value of an element, but it leaves a hole in the array
so after unset use myArray = array_values(myArray);
*/

?>