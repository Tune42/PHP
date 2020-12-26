<?php

// Create simple string
$name = 'Michael';
$string = 'Hello I am ' .$name. '. I am 31';
$string2 = "Hello I am $name. I am 31";

// String concatenation
echo $string . '<br>' . $string2;

// String functions
strlen($string);
trim($string); //trims remove whitespaces
ltrim($string);
rtrim($string);
str_word_count($string);
strrev($string);
strtoupper($string);
strtolower($string);
ucfirst('hello');
lcfirst('HELLO');
ucwords('hello world');
strpos($string, 'world');
stripos($string, 'world'); // case insensitive
substr($string, 8);
str_replace('world', 'PHP', $string);
str_ireplace('world', 'php', $string);


// Multiline text and line breaks
$longText = "
    Hello, my name is Michael.
    I am 31.
    I love my daughter.
";

echo nl2br($longText);

// Multiline text and reserve html tags
$longText = "
    Hello, my name is <b>Michael</b>
    I am <b>27</b>,
    I love my daughter.
";

echo nl2br($longText);


// https://www.php.net/manual/en/ref.strings.php