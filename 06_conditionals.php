<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo '1';
} else {
    echo '2';
}

// Without circle braces

if ($age === 20) echo "1";

// Sample if-else

if ($age > 20) {
    echo "1";
} else {
    echo "2";
}

// Difference between == and ===
// == matches string 2 to integer 2
// === is deeper equality

// if AND &&

// if OR ||

// Ternary if
echo $age < 22 ? '1' : '2';

// Short ternary - variable exists, if not assign 18
$age ?: 18;

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$name ?? 'John'; // short version

// switch
$userRole = 'admin'; // editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user';
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}
