<?php

session_start();

$user = $_SESSION['username'];

	// Kết nối database, lấy dữ liệu chung

	require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';

	date_default_timezone_set('Asia/Saigon'); 

	$date_current = date("Y-m-d H:i:s");

	// Khai báo các biến gán với dữ liệu nhận được

	$body_msg = @mysqli_real_escape_string($db, $_POST['body_msg']);

	// Xử lý chuỗi $body_msg

	$body_msg = htmlentities($body_msg);

	$body_msg = trim($body_msg);



	// Nếu $body_msg khác rỗng

	if ($body_msg != '')

	{

		// Thực thi gửi tin nhắn

		$query_send_msg = mysqli_query($db, "INSERT INTO messages (body, user_from, user_to, date_sent) VALUES (

				'$body_msg',

				'$user',

				'Ngưng Bích Buildings',

				'$date_current'

			)");

	}

?>