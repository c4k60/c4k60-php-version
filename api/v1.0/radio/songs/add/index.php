<?php
require "../../../../db.php";
if (isset($decodedData['id']) && isset($decodedData['requester'])) {
    $video_id = $decodedData['id'];
    $requester = $decodedData['requester'];
    $sql = "INSERT INTO live_radio_users_requested_playlist (video_id, requested_by) VALUES ('$video_id','$requester')";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        http_response_code(200);
        echo json_encode(array("code" => 200, "message" => "Successfully added song to queue!"), JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(500);
        echo json_encode(array("code" => 500, "message" => "Wrong API parameters or server error! Please try again."), JSON_UNESCAPED_UNICODE);
    }
    $conn->close();
} else {
    http_response_code(401);
    echo json_encode(array("code" => 401, "message" => "Unauthorized or wrong API parameters! Please try again."), JSON_UNESCAPED_UNICODE);
}