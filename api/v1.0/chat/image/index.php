<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

include('../../../db.php');

if (isset($_POST['user_to']) && isset($_POST['user_from']) && isset($_POST['type']) && isset($_FILES['image'])) {
$image = $_FILES['image'];
  $to_id = $_POST['user_to'];

  // get the logged in user's username from the SESSION
  $from_id = $_POST['user_from'];
      
    $type = $_POST['type'];

  // get the image name
  $image_name = $image['name'];

  // get the image tmp_name
  $image_tmp_name = $image['tmp_name'];

  // get the image size
  $image_size = $image['size'];

  // get the image error
  $image_error = $image['error'];

  // get the image type
  $image_type = $image['type'];

  // get the image extension
  $image_ext = explode('.', $image_name);
  $image_actual_ext = strtolower(end($image_ext));

  // allowed extensions
  $allowed = array('jpg', 'jpeg', 'png', 'gif');

  // check if the extension is allowed
  if (in_array($image_actual_ext, $allowed)) {
    // check if there is an error
    if ($image_error === 0) {
      // check if the image size is less than 10MB
      if ($image_size < 10000000) {
        // create a new name for the image
        $image_new_name = $image_name;

        // create the image path
        $image_destination = '../../../../assets/images/chats/' . $image_new_name;

        // move the image to the uploads folder
        move_uploaded_file($image_tmp_name, $image_destination);
      }
    }
  }
  
	# get data from XHR request and store them in var
	$to_id = $_POST['user_to'];

	# get the logged in user's username from the SESSION
	$from_id = $_POST['user_from'];
      
    $type = $_POST['type'];

	$sql = "INSERT INTO 
	       chat (user_from, user_to, image_url, type) 
	       VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
      $stmt->bind_param('ssss', $from_id, $to_id, $image_new_name, $type); // one s for each parameter
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
            echo json_encode(array("status" => "200", "message" => "img_inserted_successfully"), JSON_UNESCAPED_UNICODE);
        }
     }
  } else {
   echo json_encode(array("status" => "400", "message" => "method_get_not_allowed"), JSON_UNESCAPED_UNICODE);
}
