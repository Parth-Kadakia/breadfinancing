<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Get the input from JavaScript
$jsonData = json_encode(file_get_contents('php://input'));

// Check if the state is NY, create a JSON with taxTotal as 5.
if($jsonData['shippingAddress']['state'] == 'NY'){
    $arr = array ('taxTotal'=>500);
}else{
    $arr = array ('taxTotal'=>0);
}

return json_encode($arr);

?>