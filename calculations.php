<?php

$response = [];
$response["status"] = 200;

if(isset($_GET["x"])){
    $x = $_GET["x"];
}else{
    $response["status"] = 400;
    $response["response"] = "Don't mess around bro :)";
    echo json_encode($response);
    exit();
}
if(isset($_GET["y"])){
    $y = $_GET["y"];
}else{
    $y = 5;
}

$z = $y - $x;


$response = [];
$response["response"] = $z;

echo json_encode($response);

