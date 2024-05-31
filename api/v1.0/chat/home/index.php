<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');


$user = $_GET['username'] ?? "";
    /**
      Getting all the conversations 
      for current (logged in) user
    **/
    $sql = "SELECT * FROM conversations
            WHERE user_1='$user' OR user_2='$user'
            ORDER BY updated_at DESC";

    $result = $conn->query($sql);

        $user_data = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($conversation = $result->fetch_assoc()) {
    if ($conversation['user_1'] == $user) {
      		$user_2 = $conversation['user_2'];
            	$sql2  = "SELECT *
            	          FROM c4_user WHERE username='$user_2'";
            	$result2 = $conn->query($sql2);
            }else {
      		$user_1 = $conversation['user_1'];
            	$sql2  = "SELECT *
            	          FROM c4_user WHERE username='$user_1'";
            	$result2 = $conn->query($sql2);
            }
    $allConversations = $result2->fetch_assoc();
      # pushing the data into the array 
            array_push($user_data, $allConversations);
  }
} else {
}

echo json_encode($user_data, JSON_UNESCAPED_UNICODE);

$conn->close();