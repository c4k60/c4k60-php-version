<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

mysqli_set_charset($conn, 'UTF8');

$username = $_GET['username'] ?? "";
$date = date('Y-m-d H:i:s');

if (isset($username) && !empty($username)) {
  $sql = "UPDATE c4_user SET last_activity = '$date' WHERE username = '$username'";
  if ($conn->query($sql) === TRUE) {
    echo json_encode(array("status" => "success"), JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode(array("status" => "failed", "message" => $conn->error), JSON_UNESCAPED_UNICODE);
  }
} else {
    echo json_encode(array("status" => "failed", "message" => "Username cannot be blank!"), JSON_UNESCAPED_UNICODE);
}