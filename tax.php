<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$jsonData = json_encode(file_get_contents('php://input'));

if($jsonData['shippingAddress']['state'] == 'NY'){
    $arr = array ('taxTotal'=>500);
}else{
    $arr = array ('taxTotal'=>0);
}

return json_encode($arr);

?>