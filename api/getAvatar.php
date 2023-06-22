<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('db.php');

mysqli_set_charset($conn, 'UTF8');

$username = $decodedData['username'];

$SQL = "SELECT avatar FROM c4_user WHERE username = '$username'";
$exeSQL = mysqli_query($conn, $SQL);
$checkUsername =  mysqli_num_rows($exeSQL);

if ($checkUsername != 0) {
    $arrayu = mysqli_fetch_array($exeSQL);
    $Message = "success";
    $Name = $arrayu['name'];
    $Avatar = $arrayu['avatar'];
    $response = array("Message" => $Message, "Username" => $username, "Avatar" => $Avatar);
} else {
    $Message = "no_account_found";
    $response = array("Message" => $Message);
}

echo json_encode($response);
