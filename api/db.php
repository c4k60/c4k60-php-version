<?php
$conn = mysqli_connect('localhost', 'tunnaduong', 'Tunganh2003');
$database = mysqli_select_db($conn, 'tunnaduong_c4k60');

$encodedData = file_get_contents('php://input');
$decodedData = json_decode($encodedData, true);


header('Content-Type: application/json; charset=utf-8');

$conn->query("SET CHARSET utf8");
mysqli_set_charset($conn, 'UTF8');