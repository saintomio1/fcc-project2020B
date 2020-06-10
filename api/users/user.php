<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-with');

require('../db.php');
//passMD5 and email

/*

*/
$data = json_decode(file_get_contents("php://input"));
$email = $pdo_conn->email = $data->email;
$pass = $pdo_conn->passMD5 = $data->pass;
$sql = 'SELECT * FROM membership_users WHERE email="$email" AND passMD5 ="$passMD5" ';

$query = $pdo_conn->query($sql);
if($query){
	echo json_encode(
      array('message' => 'Login successful');
      
      header('Location: home.php');
}else{
	echo json_encode(
      array('message' => 'Failed to login or invalid credentials');
}


?>