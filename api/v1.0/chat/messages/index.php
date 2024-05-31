<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

mysqli_set_charset($conn, 'utf8mb4');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $message = $decodedData['message'] ?? null;
  $user_from = $decodedData['user_from'] ?? null;
  $user_to = $decodedData['user_to'] ?? null;
  $type = $decodedData['type'] ?? null;
  
  $sql = "INSERT INTO chat (message, user_from, user_to, type) VALUES ('$message', '$user_from', '$user_to', '$type')";

  if ($conn->query($sql) === TRUE) {
    echo json_encode(array("code" => "200", "message" => "success"), JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode(array("code" => "400", "message" => $conn->error), JSON_UNESCAPED_UNICODE);
  }
} else {
  $user_to = $_GET['user_to'] ?? "class_group";
  if ($user_to == "class_group") {
   	$sql = "SELECT * FROM chat WHERE user_to = '$user_to'";
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
  $user_from = $_GET['user_from'] ?? "";

    $sql = "SELECT * FROM chat WHERE (user_to = '$user_to' AND user_from = '$user_from') OR (user_to = '$user_from' AND user_from = '$user_to')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
      echo json_encode($data, JSON_UNESCAPED_UNICODE);
    } else {
      echo json_encode(array(), JSON_UNESCAPED_UNICODE);
    }
}