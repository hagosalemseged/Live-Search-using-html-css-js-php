<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
// url for json data
$url = 'https://jsonplaceholder.typicode.com/comments?postId=3';
// put the contents of the json into a variable
$data = file_get_contents($url); 
// decode the JSON feed
$items = json_decode($data);
echo json_encode($items);
