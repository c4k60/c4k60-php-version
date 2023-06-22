<center>
    		<img src="/images/ngungbich.jpg" style="width: 66px;border-radius: 50%;margin-top: 25px;">
    		<p style="font-weight: 600;font-size: 1.0625rem;margin-bottom: 0px;margin-top: 9px;">Ngưng Bích Buildings :))))))</p>
    		<p style="font-size: .8125rem;color: #65676b;">Dương Tùng Anh đã tạo nhóm này</p>
    	</center>
    	<center>
    		<p style="font-size: .6875rem;color: #8a8d91;">27/2/2021, 13:00</p>
    	</center>
<?php
session_start();
$user = $_SESSION['username'];
	// Kết nối database, lấy dữ liệu chung
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';

	// Lấy dữ liệu từ table messages theo thứ tự id_msg tăng dần
	$query_get_msg = mysqli_query($db, "SELECT * FROM messages ORDER BY id ASC");
	// Dùng vòng lập while để lấy dữ liệu
	while ($row = mysqli_fetch_assoc($query_get_msg))
	{
		// Thời gian gửi tin nhắn 2020-01-23 12:23:43
		$date_sent = $row['date_sent'];
			$day_sent = substr($date_sent, 8, 2); // Ngày gửi
			$month_sent = substr($date_sent, 5, 2); // Tháng gửi
			$year_sent = substr($date_sent, 0, 4); // Năm gửi
			$hour_sent = substr($date_sent, 11, 2); // Giờ gửi
			$min_sent = substr($date_sent, 14, 2); // Phút gửi



		// Nếu người gửi là $user thì hiển thị khung tin nhắn màu xanh
		if ($row['user_from'] == $user)
		{
			if ($row['body'] == "(y)") {
			echo '
			<i class="far fa-check-circle" style="clear: both;float: right;display: inline;color: #bcc0c4;font-size: 15px;margin-right: 3px;margin-top:20px;"></i>
    	<svg id="likebuttonfrommsg" height="32" width="32" viewBox="0 0 16 16" style="position: relative;bottom: 13px;margin-left: 9px;margin-top:20px;float: right;display: inline;bottom: 17px;margin-right: 4px;"><path d="M16,9.1c0-0.8-0.3-1.1-0.6-1.3c0.2-0.3,0.3-0.7,0.3-1.2c0-1-0.8-1.7-2.1-1.7h-3.1c0.1-0.5,0.2-1.3,0.2-1.8 c0-1.1-0.3-2.4-1.2-3C9.3,0.1,9,0,8.7,0C8.1,0,7.7,0.2,7.6,0.4C7.5,0.5,7.5,0.6,7.5,0.7L7.6,3c0,0.2,0,0.4-0.1,0.5L5.7,6.6 c0,0-0.1,0.1-0.1,0.1l0,0l0,0L5.3,6.8C5.1,7,5,7.2,5,7.4v6.1c0,0.2,0.1,0.4,0.2,0.5c0.1,0.1,1,1,2,1h5.2c0.9,0,1.4-0.3,1.8-0.9 c0.3-0.5,0.2-1,0.1-1.4c0.5-0.2,0.9-0.5,1.1-1.2c0.1-0.4,0-0.8-0.2-1C15.6,10.3,16,9.9,16,9.1z" fill="#0084FF"></path><path d="M3.3,6H0.7C0.3,6,0,6.3,0,6.7v8.5C0,15.7,0.3,16,0.7,16h2.5C3.7,16,4,15.7,4,15.3V6.7C4,6.3,3.7,6,3.3,6z" fill="#0084FF"></path></svg>
			';
		} else {
			echo '
				<i class="far fa-check-circle" style="float: right;display: inline;color: #bcc0c4;font-size: 15px;margin-right: 3px;clear: both;position: relative;top: 23px;"></i>
    	<div style="background-color: rgb(0, 132, 255);float: right;border-radius: 20px;
    padding: 7px 10px 7px 10px;margin-top: 2px;max-width: 75%;">
    		<div style="color: white;">'.$row['body'].'</div>
    	</div>
			';
		}
		}
		// Ngược lại người gửi không phải là $user thì hiển thị khung tin nhắn màu xám
		else
		{
			$userfrom = $row['user_from'];
			$query_get_msg2 = mysqli_query($db, "SELECT * FROM accounts WHERE username='$userfrom'");
	// Dùng vòng lập while để lấy dữ liệu
	while ($row2 = mysqli_fetch_assoc($query_get_msg2))
	{
		if ($row['body'] == "(y)") {
			echo '
			<img src="'.$row2['profile_pic'].'" style="width: 28px;border-radius: 50%;float: left;clear: both;margin-left: 7px;position: relative;top: 35px;">
		<div style="float: left;">
			<div style="font-size: .6875rem;color: #65676b;margin-left: 20px;margin-top: 10px;">'.$row2['name'].'</div>
		
    	<svg id="likebuttonfrommsg" height="32" width="32" viewBox="0 0 16 16" style="position: relative;bottom: 13px;margin-left: 9px;margin-top:20px;float: left;display: inline;bottom: 17px;margin-right: 4px;"><path d="M16,9.1c0-0.8-0.3-1.1-0.6-1.3c0.2-0.3,0.3-0.7,0.3-1.2c0-1-0.8-1.7-2.1-1.7h-3.1c0.1-0.5,0.2-1.3,0.2-1.8 c0-1.1-0.3-2.4-1.2-3C9.3,0.1,9,0,8.7,0C8.1,0,7.7,0.2,7.6,0.4C7.5,0.5,7.5,0.6,7.5,0.7L7.6,3c0,0.2,0,0.4-0.1,0.5L5.7,6.6 c0,0-0.1,0.1-0.1,0.1l0,0l0,0L5.3,6.8C5.1,7,5,7.2,5,7.4v6.1c0,0.2,0.1,0.4,0.2,0.5c0.1,0.1,1,1,2,1h5.2c0.9,0,1.4-0.3,1.8-0.9 c0.3-0.5,0.2-1,0.1-1.4c0.5-0.2,0.9-0.5,1.1-1.2c0.1-0.4,0-0.8-0.2-1C15.6,10.3,16,9.9,16,9.1z" fill="#0084FF"></path><path d="M3.3,6H0.7C0.3,6,0,6.3,0,6.7v8.5C0,15.7,0.3,16,0.7,16h2.5C3.7,16,4,15.7,4,15.3V6.7C4,6.3,3.7,6,3.3,6z" fill="#0084FF"></path></svg></div>
			';
		} else {
			echo '
				<img src="'.$row2['profile_pic'].'" style="width: 28px;border-radius: 50%;float: left;clear: both;margin-left: 7px;margin-right: 7px;position: relative;top: 38px;">
    	<div style="float: left;max-width: 75%;">
    	<div style="font-size: .6875rem;color: #65676b;margin-left: 13px;margin-top: 10px;">'.$row2['name'].'</div>
    	<div style="margin-top: 2px;">
    		<span style="display:inline-block;color: black;background-color: #e4e6eb;border-radius: 20px;padding: 7px 10px 7px 10px;">'.$row['body'].'</span>
    	</div>
    </div>
			';
		}
	}
	}
	}
?>