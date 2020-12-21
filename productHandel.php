<?php 
header("Content-Type: application/json");
$input = file_get_contents('php://input');
$body = json_decode($input);
echo json_encode($body);