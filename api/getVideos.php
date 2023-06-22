<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

header("Content-Type: application/json;charset=utf-8");

include('db.php');

mysqli_set_charset($conn, 'UTF8');

$video = array();

$video['playlist_name'] = "Live 01";
$video['total_videos'] = "5";
$video['video_ids'] = array('KypuJGsZ8pQ', 'UVbv-PJXm14', 'PNhYz6RmIr4', 'hTGcMk_QXEg', 'ixdSsW5n2rI');
$video['now_playing'] = "0";
$video['current_video_duration'] = "200";
$video['elapsed_time'] = "30";

echo json_encode($video, JSON_UNESCAPED_UNICODE);