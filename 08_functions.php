<?php

function hello($name) {
    echo "hello I am $name".'<br>';
}

hello('michael');
hello('brad');
hello('mark');

// function sum($a, $b) {
//     return $a + $b;
// }

// echo sum(4, 5);

function sum(...$nums) {
    // echo '<pre>';
    // var_dump($nums); // shows $nums is stored like an array
    // echo '</pre>';

    // $total = 0;
    // foreach ($nums as $i => $num) { // could remove index and arrow since it is not used
    //     $total += $num;
    // }
    // return $total;

    return array_reduce($nums, fn($carry, $n) => $carry + $n);
} 

echo sum(1 ,2 ,3 ,4 ,5 ,6);


