<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';

// Assignment with math operators
$a += $b;
$a *= $b;
$a /= $b;
$a -= $b;
echo $a; // 5

// Increment operator
echo $a++;  // 5
echo ++$a; // 7

// Decrement operator
echo $a--;  // 7
echo --$a; // 5

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45");
is_numeric('3g.45'); // false

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
// other casts include int, floatval, intval
var_dump($number);

// Number functions
abs(-15); // 15
pow(2, 3); // 8
sqrt(16); // 4
max(2, 3); // 3
min(2, 3); // 2
round(2.4); // 2
floor(2.6); // 2
ceil(2.4); // 3

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, ',', ' '); // 123 456 789,12

// https://www.php.net/manual/en/ref.math.php
