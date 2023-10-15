<?php
require "./vendor/autoload.php";
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


$key = 'kdfejkjsdhkjdfhkjfjkxhjhgdjhgfhjgfhgfhjgkasjdljsdlkjse';
$payload = [
    'uname' => 'mihir',
    'city' => 'Surat',
];

$jwt = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));
echo $jwt;

?>