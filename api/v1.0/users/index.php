<?php
include('../../db.php');

mysqli_set_charset($conn, 'UTF8');

$username = $decodedData['username'];

$SQL = "SELECT * FROM c4_user WHERE username = '$username'";
$exeSQL = mysqli_query($conn, $SQL);
$checkUsername =  mysqli_num_rows($exeSQL);

if ($checkUsername != 0) {
    http_response_code(200);
    $arrayu = mysqli_fetch_array($exeSQL);
    $response = array("code" => 200, "message" => "Successfully retrieved user's info!", "info" => array("username" => $username, "full_name" => $arrayu["name"], "first_name" => $arrayu["firstname"], "last_name" => $arrayu["lastname"], "date_of_birth" => $arrayu["dayofbirth"] . "/" . $arrayu["monthofbirth"] . "/" . $arrayu["yearofbirth"], "role" => $arrayu["role"], "gender" => $arrayu["gender"]));
} else {
    http_response_code(400);
    $response = array("code" => 400, "message" => "No account found!");
}

echo json_encode($response);