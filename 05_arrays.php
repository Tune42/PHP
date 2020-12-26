<?php

// Create array
$fruits = [];
// or 
$fruits = array();
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>'; // debug output for readability
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'Peach';

// Check if array has element at index 2
isset($fruits[2]); // true

// Append element
$fruits[] = 'Banana';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'foo');

// Remove element from the end of the array
array_pop($fruits);

// Add element at the beginning of the array
array_unshift($fruits, 'bar');

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = "Banana,Apple,Peach";
explode(",", $string);

// Combine array elements into string
implode("&", $fruits);

// Check if element exist in the array
in_array('Apple', $fruits);
// Search element index in the array
array_search('Mango', $fruits); // returns index or returns false
// Merge two arrays
$vegetables = ['potato', 'cucumber'];
array_merge($fruits, $vegetables);

// or = new method

var_dump([...$fruits, ...$vegetables]);

// Sorting of array (Reverse order also)
sort($fruits);
rsort($fruits);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays - key value pairs
// ============================================

// Create an associative array
$person = [
    'name' => 'Michael',
    'surname' => 'Book',
    'age' => 31,
    'hobbies' => ['Chillin'],
];

echo '<pre>';
var_dump($person);
echo '</pre>';
// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'Disney';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

// can be written with shorthand as 

$person['address'] ??= 'unknown';
echo $person['address'];

// Check if array has specific key

// Print the keys of the array
array_keys($person);

// Print the values of the array
array_values($person);

// Sorting associative arrays by values, by keys
ksort($person); // sorted by keys
asort($person); // sorted by values

// Two dimensional arrays - often used for storing return data from APIs
$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false],
];