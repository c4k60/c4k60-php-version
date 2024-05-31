<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

	if (isset($decodedData['message']) &&
        isset($decodedData['user_to']) && isset($decodedData['user_from']) && isset($decodedData['type'])) {

	# get data from XHR request and store them in var
	$message = $decodedData['message'];
	$to_id = $decodedData['user_to'];

	# get the logged in user's username from the SESSION
	$from_id = $decodedData['user_from'];
      
    $type = $decodedData['type'];

	$sql = "INSERT INTO 
	       chat (user_from, user_to, message, type) 
	       VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
      $stmt->bind_param('ssss', $from_id, $to_id, $message, $type); // one s for each parameter
	$res  = $stmt->execute();
    
    # if the message inserted
    if ($res) {
    	/**
       check if this is the first
       conversation between them
       **/
       $sql2 = "SELECT * FROM conversations
               WHERE (user_1='$from_id' AND user_2='$to_id')
               OR    (user_2='$from_id' AND user_1='$to_id')";
  		$result = $conn->query($sql2);
		if ($result->num_rows == 0 && $to_id != "class_group") {
			# insert them into conversations table 
          $sql3 = "INSERT INTO 
			         conversations(user_1, user_2)
			         VALUES ('$from_id', '$to_id')";

          if ($conn->query($sql3) === TRUE) {
            echo json_encode(array("status" => "200"), JSON_UNESCAPED_UNICODE);
          } else {
            echo json_encode(array("status" => "400", "message" => "Error: " . $sql3 . $conn->error), JSON_UNESCAPED_UNICODE);
          }

		} else {
          $time = date("Y-m-d H:i:s");
          $sql4 = "UPDATE conversations SET updated_at='$time' WHERE (user_1='$from_id' AND user_2='$to_id')
               OR    (user_2='$from_id' AND user_1='$to_id')";

          if ($conn->query($sql4) === TRUE) {
            echo json_encode(array("status" => "200", "message" => "msg_and_time_inserted_successfully"), JSON_UNESCAPED_UNICODE);
          } else {
            echo json_encode(array("status" => "400", "message" => "msg_and_time_inserted_fail"), JSON_UNESCAPED_UNICODE);
          }
        }
     }
  }
