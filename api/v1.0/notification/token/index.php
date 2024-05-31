<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

require_once('../../../db.php');

mysqli_set_charset($conn, 'UTF8');

if (isset($decodedData['username']) && isset($decodedData['token'])) {
  $username = $decodedData['username'];
  $token = $decodedData['token'];
	
  if (empty($token)) {
   	echo json_encode([
    	"error" => "token_must_not_be_blank"
    ]); 
    exit;
  }
  
  $sql = "SELECT * FROM c4_user WHERE expo_push_notification_token = '$token'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo json_encode([
    	"message" => "duplicate_token_do_nothing",
    ]);
  } else {
    $sql = "UPDATE c4_user SET expo_push_notification_token = '$token' WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result) {
      echo json_encode([
          "message" => "updated_token_successfully",
          "token" => $token
      ]);
    } else {
      echo json_encode([
          "error" => "sql_query_failed",
      ]);
    }
  }
} else {
    echo json_encode([
    	"error" => "access_denied",
    ]);
}