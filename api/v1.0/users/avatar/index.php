<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

mysqli_set_charset($conn, 'UTF8');

$username = $decodedData['username'];

$SQL = "SELECT avatar FROM c4_user WHERE username = '$username'";
$exeSQL = mysqli_query($conn, $SQL);
$checkUsername =  mysqli_num_rows($exeSQL);

if ($checkUsername != 0) {
    http_response_code(200);
    $arrayu = mysqli_fetch_array($exeSQL);
    $Avatar = $arrayu['avatar'];
    $response = array("code" => 200, "message" => "Successfully retrieved avatar!", "username" => $username, "avatar" => $Avatar);
} else {
    http_response_code(400);
    $response = array("code" => 400, "message" => "No account found!");
}

echo json_encode($response);