// Hàm gửi tin nhắn
function sendMsg() {
	// Khai báo biến trong form
	$body_msg = $('#formSendMsg textarea[id="myarea2"]').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'sendmsg.php', // đường dẫn file xử lý
		type : 'POST', // phương thức
		// dữ liệu
		data : {
			body_msg : $body_msg
		// thực thi khi gửi dữ liệu thành công
		}, success : function() {
			$('#formSendMsg textarea[id="myarea2"]').val(''); // làm trống thanh trò chuyện
		}
	});
	setTimeout(updateScroll, 1000);
}

// Bắt sự kiện gõ phím enter trong thanh trò chuyện
$('#formSendMsg textarea[id="myarea2"]').keypress(function() {
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if (keycode == '13') {
		// Chạy hàm gửi tin nhắn
		sendMsg();   		
	}
});

// Bắt sự kiện click vào thanh trò chuyện
$('#formSendMsg textarea[id="myarea2"]').click(function(e) {
	// Kéo hết thanh cuộn trình duyệt đến cuối
	window.scrollBy(0, $(document).height());
});