<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
echo file_get_contents('lorem.txt');

$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
file_put_contents('sample.txt', 'Some Content');

// file_get_contents from URL
$todoJson = file_get_contents('https://jsonplaceholder.typicode.com/todos/1');
echo $todoJson;
$todo = json_decode($todoJson, true); //true flag creates associative array instead of obj
echo '<pre>';
var_dump($todo);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('sample.txt'); // true
// is_dir
is_dir('test'); // false
// filemtime
// filesize
// disk_free_space
// file