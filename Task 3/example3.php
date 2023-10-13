<?php 

// Initialize an example array
$exampleArray = [10, 20, 30, 40, 50];

// count: Count the number of elements in an array
$count = count($exampleArray);
echo "Count: $count\n";

// in_array: Check if a value exists in the array
$isInArray = in_array(30, $exampleArray);
echo "Is 30 in the array? " . ($isInArray ? 'Yes' : 'No') . "\n";

// array_key_exists: Check if a key exists in the array
$hasKey = array_key_exists(2, $exampleArray);
echo "Does key 2 exist in the array? " . ($hasKey ? 'Yes' : 'No') . "\n";

// array_keys: Get all the keys from the array
$keys = array_keys($exampleArray);
print_r($keys);

// array_values: Get all the values from the array
$values = array_values($exampleArray);
print_r($values);

// array_sum: Calculate the sum of array values
$sum = array_sum($exampleArray);
echo "Sum of array values: $sum\n";

// end: Get the last element of the array
$lastElement = end($exampleArray);
echo "Last element: $lastElement\n";

// array_rand: Get a random key from the array
$randomKey = array_rand($exampleArray);
echo "Random key: $randomKey\n";

// array_merge: Merge two or more arrays
$mergedArray = array_merge($exampleArray, [60, 70, 80]);
print_r($mergedArray);

// array_replace: Replace elements of one array with elements from another
$replacedArray = array_replace($exampleArray, [2 => 25, 4 => 45]);
print_r($replacedArray);

// array_shift: Remove and return the first element of the array
$shiftedElement = array_shift($exampleArray);
echo "Shifted element: $shiftedElement\n";
print_r($exampleArray);

// array_unshift: Add one or more elements to the beginning of the array
array_unshift($exampleArray, 5, 15);
print_r($exampleArray);

// array_push: Add one or more elements to the end of the array
array_push($exampleArray, 60, 70);
print_r($exampleArray);

// array_pop: Remove and return the last element of the array
$poppedElement = array_pop($exampleArray);
echo "Popped element: $poppedElement\n";
print_r($exampleArray);

// array_slice: Extract a slice of the array
$slice = array_slice($exampleArray, 1, 3);
print_r($slice);

// array_splice: Remove a portion of the array and replace with other elements
$spliceResult = array_splice($exampleArray, 2, 2, [33, 44]);
print_r($exampleArray);
print_r($spliceResult);
?>