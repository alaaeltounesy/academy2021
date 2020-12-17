<?php 
header("Content-Type: application/json");
//echo json_encode(array('state' => true, 'data' =>$_POST));
$input = file_get_contents('php://input');
$body = json_decode($input);
echo json_encode($body);