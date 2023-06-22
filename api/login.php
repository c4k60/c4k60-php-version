<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('db.php');

mysqli_set_charset($conn, 'UTF8');

$username = $decodedData['username'];
$password = $decodedData['password']; //password is hashed

$SQL = "SELECT * FROM c4_user WHERE username = '$username'";
$exeSQL = mysqli_query($conn, $SQL);
$checkUsername =  mysqli_num_rows($exeSQL);

if ($checkUsername != 0) {
    $arrayu = mysqli_fetch_array($exeSQL);
    if ($arrayu['password'] != $password) {
        $Message = "Mật khẩu sai!";
        $GLOBALS['response'][] = array("Message" => $Message);
    } else {
        $Message = "Thành công!";
        $Name = $arrayu['name'];
        $Avatar = $arrayu['avatar'];
        $GLOBALS['response'][] = array("Message" => $Message, "Username" => $username, "Name" => $Name, "Firstname" => $arrayu['firstname'], "Lastname" => $arrayu['lastname'],  "Level" => $arrayu['role'], "Avatar" => $Avatar);
    }
} else {
    $Message = "Không có tài khoản!";
    $GLOBALS['response'][] = array("Message" => $Message);
}

echo json_encode($response);