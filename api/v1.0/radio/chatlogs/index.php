<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

header("Content-Type: application/json;charset=utf-8");
require "../../../db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($decodedData['by']) || isset($decodedData['msg_type']) || isset($decodedData['message'])) {
        $by = $decodedData['by'];
        $msg_type = $decodedData['msg_type'];
        $message = $decodedData['message'];
        $thumbnail = $decodedData['thumbnail'] ? $decodedData['thumbnail'] : "";
        $sql = "INSERT INTO live_radio_logs (created_by, msg_type, msg, thumbnail) VALUES ('$by','$msg_type', '$message', '$thumbnail')";
        $result = $conn->query($sql);
        if ($result === TRUE) {
            http_response_code(200);
            echo json_encode(array("code" => 200, "message" => "Successfully added chatlog!"), JSON_UNESCAPED_UNICODE);
        } else {
            http_response_code(500);
            echo json_encode(array("code" => 500, "message" => "Wrong API parameters or server error! Please try again."), JSON_UNESCAPED_UNICODE);
        }
        $conn->close();
    } else {
        http_response_code(401);
        echo json_encode(array("code" => 401, "message" => "Unauthorized or wrong API parameters! Please try again."), JSON_UNESCAPED_UNICODE);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    $sql = "SELECT count(*) AS total FROM live_radio_logs";
    $row = $conn->query($sql)->fetch_assoc();
    $total = $row['total'];
    $page = 1;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    $items_per_page = 30;
    if ($total - ($items_per_page * $page) < 0) {
        $offset = 0;
    } else {
        $offset = $total - ($items_per_page * $page) + $temp;
    }
    $sql = "SELECT * FROM live_radio_logs LIMIT " . $items_per_page . " OFFSET " . $offset;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $response = array();
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $response[] = $row;
        }
        echo json_encode(array("code" => 200, "total_items" =>  (int)$total, "page" => (int)$page, "items" => $response), JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(array("code" => 400, "message" => "No result."), JSON_UNESCAPED_UNICODE);
    }
    $conn->close();
}