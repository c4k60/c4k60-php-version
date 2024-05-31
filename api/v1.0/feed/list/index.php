<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

mysqli_set_charset($conn, 'utf8mb4');

$sql = "SELECT count(*) AS total FROM tintuc_posts";
    $row = $conn->query($sql)->fetch_assoc();
    $total = $row['total'];
    $page = 1;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    $items_per_page = 4;
   // if ($total - ($items_per_page * $page) < 0) {
      //  $offset = 0;
    //} else {
        //$offset = $total - ($items_per_page * $page);
      $offset = ($page - 1) * $items_per_page;
    //}
    $sql = "SELECT * FROM tintuc_posts ORDER BY timeofpost DESC LIMIT " . $items_per_page . " OFFSET " . $offset;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $response = array();
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $response[] = $row;
        }
        echo json_encode(array("code" => 200, "total_items" =>  (int)$total, "page" => (int)$page, "items" => $response), JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(array("code" => 200, "total_items" =>  (int)$total, "page" => (int)$page, "items" => []), JSON_UNESCAPED_UNICODE);
    }
    $conn->close();