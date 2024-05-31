<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

require_once('../../../db.php');

mysqli_set_charset($conn, 'UTF8');

function sendNotification($to, $title, $body, $return = true) {
 // URL của API
  $url = "https://exp.host/--/api/v2/push/send";

  // Dữ liệu bạn muốn gửi
  $message = [
      // Thêm nội dung của bạn vào đây
      "to" => $to,
      "sound" => "default",
      "title" => $title,
      "body" => $body,
  ];

  // Chuyển đổi dữ liệu thành JSON
  $jsonMessage = json_encode($message);

  // Khởi tạo cURL
  $ch = curl_init($url);

  // Thiết lập các tùy chọn cURL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Host: exp.host',
      'Accept: application/json',
      'Accept-Encoding: gzip, deflate',
      'Content-Type: application/json'
  ]);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonMessage);

  // Thực thi yêu cầu cURL và lấy kết quả
  $response = curl_exec($ch);

  if ($return) {
    // Kiểm tra lỗi
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    } else {
        echo $response;
    }
  }

  // Đóng cURL
  curl_close($ch); 
}

if ($_GET['to'] != 'ALL') {
  if (!isset($_GET['to']) || !isset($_GET['title']) || !isset($_GET['body'])) {
     echo json_encode([
      "error" => "missing_params"
    ]);
    exit(); 
  }
  $username = $_GET['to'];
  $title = $_GET['title'];
  $body = $_GET['body'];

  $sql = "SELECT expo_push_notification_token FROM c4_user WHERE username = '$username'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $token = $row['expo_push_notification_token'];
  }else {
    echo json_encode([
      "error" => "username_not_found"
    ]);
    exit(); 
  }

  // Send notification
  sendNotification($token, $title, $body);
} else {
  $sql = "SELECT expo_push_notification_token AS token FROM c4_user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $token = $row['token'];
        if ($token == NULL) continue;
        // Send notification
  		sendNotification($token, $_GET['title'], $_GET['body'], false);
      }
    echo json_encode([
    	"message" => "sent_notification_to_all_success"
    ]);
  }
}