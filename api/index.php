<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$data = [
    'message'=> 'welcome to doc api',
    'version'=> '1.0.0',
    'documentation'=> 'https://doc.localhost/doc/documentation'
];

echo json_encode($data);

?>