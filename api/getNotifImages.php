<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('db.php');

mysqli_set_charset($conn, 'UTF8');

$id = $decodedData['id'];

$sql = "SELECT image FROM thongbaolop WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "[";
    while ($row = $result->fetch_assoc()) {
        $img = $row['image'];
        $Images = explode(",", $img);
        foreach ($Images as $Image) {
            echo "{\"uri\":\"" . $Image . "\"},";
        }
        echo "]";
    }
} else {
    echo "{\"error\":\"access_denied\", \"requested\":\"".$id."\"}";
}

$ob = ob_get_clean();
$ob = str_replace("},]", "}]", $ob);
echo $ob;