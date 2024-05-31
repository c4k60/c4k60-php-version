<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

mysqli_set_charset($conn, 'UTF8');

$album = $_GET['album'] ?? "0";

$sql = "SELECT * FROM thuvienanh WHERE album = '$album'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  echo json_encode($data, JSON_UNESCAPED_UNICODE);
}