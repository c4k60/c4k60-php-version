<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

mysqli_set_charset($conn, 'utf8mb4');

$username = $_GET['username'] ?? null;

if (isset($_GET['username'])) {
  $sql = "SELECT * FROM c4_user WHERE username='$username'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo json_encode($row, JSON_UNESCAPED_UNICODE);
      }
  }
} else {
  $sql = "SELECT * FROM c4_user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }
}