<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

mysqli_set_charset($conn, 'utf8mb4');

$user_from = $_GET['user_from'] ?? "";
$user_to = $_GET['user_to'] ?? "";
$type = $_GET['type'] ?? "";

if ($type == "group") {
  $sql = "SELECT * FROM chat WHERE user_to = 'class_group' ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
       	$data[] = $row;
      }
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode(array(), JSON_UNESCAPED_UNICODE);
  }
  die;
}

  $sql = "SELECT * FROM chat WHERE user_to != 'class_group' AND (user_from='$user_from' AND user_to='$user_to') OR (user_to='$user_from' AND user_from='$user_to') ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
       	$data[] = $row;
      }
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode(array(), JSON_UNESCAPED_UNICODE);
  }
