<?php

$url = 'https://jsonplaceholder.typicode.com/users';

$resource = curl_init($url); // resource is php data type, initialized here
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true); // options are set
$result = curl_exec($resource);  // curl is executed

$httpStatusCode = curl_getinfo($resource, CURLINFO_HTTP_CODE); //status code extracted
echo '<pre>';
var_dump($httpStatusCode); // int(200);
echo '</pre>';
echo $result.'<br>'.'<br>'; // result printed

curl_close($resource);

////////////////////////////////////////////////////////////////////////////

$resource = curl_init();

$user = [
    'name' => 'John Doe',
    'username' => 'jdoe',
    'email' => 'joh.doe@example.com'
];

curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);
echo $result; // result can be retained after resource closure, but can no longer call functions such as curl_getinfo()

