<?php
require "../../../db.php";
$sql = "SELECT video_id FROM live_radio_idle_playlist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $data[] = $row['video_id'];
    }
    echo json_encode(array("idle_playlist" => $data), JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array("message" => "No video or server error!"), JSON_UNESCAPED_UNICODE);
}
$conn->close();