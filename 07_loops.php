<?php

// while
// while (condition) {

// }




// do - while
// do {
//     echo '1';
// } while (condition);




// for
// for ($i = 0; $i < 10; $i++) {
//     echo '1';
// };



// foreach
$fruits = ['banana', 'apple', 'orange'];
foreach ($fruits as $i => $fruit) {
    echo $i.' '.$fruit.'<br>';
}

echo '<br>';

$person = [
    'name' => 'Michael',
    'surname' => 'Book',
    'age' => 30,
    'hobbies' => ['Programming', 'Video Games'],
];

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key .' '. implode(',', $value) . '<br>';
    } else {
        echo $key .' '. $value .'<br>';
    }
};


// Iterate Over associative array.