<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: /login');
}
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
$tieude = "Chat";
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
?>
<style type="text/css">

.main {
	margin-left: 360px;
     height: auto;
     width: auto;
     position: relative;
     overflow: auto;
     z-index: 1;
	top: 66px;
}
	.sidenav {
  height: 100%;
  width: 360px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  padding-top: 15px;
  margin-top: 66px;
  -webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);
}

.circle-menu {
	background-color: #e4e6eb;
}
.circle-menu:hover {
	background-color: #d8d9da;
    cursor: pointer;
}
</style>
<div id="outer-container">
<div class="sidenav">
	<h4 style="margin-left: 17px;display: inline;"><strong>Chat</strong></h4>
	<div class="circle-menu" style="border-radius: 50%;padding-top: 5px;padding-bottom: 5px;padding-left: 8px;padding-right: 8px;font-weight: 500;display: inline;float: right;margin-right:15px;">
		<i class="fas fa-edit"></i>
	</div>
	<div class="circle-menu" style="border-radius: 50%;padding-top: 5px;padding-bottom: 5px;padding-left: 9px;padding-right: 9px;font-weight: 500;display: inline;float: right;margin-right:10px;">
		<i class="fas fa-ellipsis-h"></i>
	</div>
	<div contenteditable="true" id="myarea" class="commentar" id="comment40" placeholder="Tìm kiếm tin nhắn" style="border:none;outline: none;resize: none;overflow: auto;border-radius: 24px;width: 330px;height: 40px;margin-left: 15px;margin-top: 15px;padding-top: 7px;background-color: #f0f2f5;padding-left: 15px;margin-bottom: 23px;">
		<span style="color: #65676b" id="span"><i class="fas fa-search"></i> Tìm kiếm</span>
	</div>
	<div style="
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 8px;
    padding-bottom: 8px;
    background-color: #eaf3ff;
    margin-left: 8px;
    margin-right: 8px;
    border-radius: 8px;
    cursor: pointer;
">
<style type="text/css">
	.icon-container {
  position: relative;
}
.status-circle {
  border-radius: 50%;
  border: 2px solid white;
  bottom: 0;
  right: 0;
  position: absolute;
  background-color: #31a24c;
  top: 25px;
    right: 4px;
    width: 14px;
    height: 14px;
}
</style>
<div class='icon-container' style="display: inline;">
<img src="/images/ngungbich.jpg" style="width: 56px;border-radius: 50%;">
<div class="status-circle"></div>
</div>
<p style="display: inline;margin-left: 7px;font-size: 15px;">Ngưng Bích Buildings :))))))</p>
</div>
</div>
<div class="main">
<table>
<tbody>
  <tr>
    <td style="-webkit-box-shadow: 0 2px 3px -2px rgb(0 0 0 / 45%);width: 100%;position: fixed;padding-left: 15px;padding-top: 10px;padding-bottom: 10px;">
    	<div class='icon-container'>
    	<img src="/images/ngungbich.jpg" style="width: 40px;border-radius: 50%;display: inline;position: absolute;top: 4px;">
    		<div class="status-circle" style="
    top: 31px;
    left: 28px;
"></div>
    </div>
    	<div style="display: inline-block;margin-left: 50px;">
    	<p style="font-weight: 600;font-size: 1.0625rem;margin-bottom: 0px;">Ngưng Bích Buildings :))))))</p>
    	<p style="font-size: .8125rem;color: #65676b;margin-bottom: 0px;">Đang hoạt động</p>
    	</div>
    </td>
  </tr>
  <tr>
    <td id="tabled" style="height: 80.5%;width: 82%;position: fixed;margin-top: 66px;overflow-y: scroll"></td>
  </tr>
  <tr>
    <td style="position: fixed;
    bottom: 0;
    width: 100%;">
    <div style="display:inline;">
    <svg height="20px" width="20px" viewBox="0 0 24 24" style="position: relative;bottom: 13px;margin-left: 10px;margin-right: 5px;"><g fill-rule="evenodd"><polygon fill="none" points="-6,30 30,30 30,-6 -6,-6 "></polygon><path d="m18,11l-5,0l0,-5c0,-0.552 -0.448,-1 -1,-1c-0.5525,0 -1,0.448 -1,1l0,5l-5,0c-0.5525,0 -1,0.448 -1,1c0,0.552 0.4475,1 1,1l5,0l0,5c0,0.552 0.4475,1 1,1c0.552,0 1,-0.448 1,-1l0,-5l5,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1m-6,13c-6.6275,0 -12,-5.3725 -12,-12c0,-6.6275 5.3725,-12 12,-12c6.627,0 12,5.3725 12,12c0,6.6275 -5.373,12 -12,12" fill="#0084FF"></path></g></svg>

<svg style="position: relative;bottom: 13px;margin-right: 5px;" height="20px" width="20px" viewBox="0 -1 17 17"><g fill="none" fill-rule="evenodd"><path d="M2.882 13.13C3.476 4.743 3.773.48 3.773.348L2.195.516c-.7.1-1.478.647-1.478 1.647l1.092 11.419c0 .5.2.9.4 1.3.4.2.7.4.9.4h.4c-.6-.6-.727-.951-.627-2.151z" fill="#0084FF"></path><circle cx="8.5" cy="4.5" r="1.5" fill="#0084FF"></circle><path d="M14 6.2c-.2-.2-.6-.3-.8-.1l-2.8 2.4c-.2.1-.2.4 0 .6l.6.7c.2.2.2.6-.1.8-.1.1-.2.1-.4.1s-.3-.1-.4-.2L8.3 8.3c-.2-.2-.6-.3-.8-.1l-2.6 2-.4 3.1c0 .5.2 1.6.7 1.7l8.8.6c.2 0 .5 0 .7-.2.2-.2.5-.7.6-.9l.6-5.9L14 6.2z" fill="#0084FF"></path><path d="M13.9 15.5l-8.2-.7c-.7-.1-1.3-.8-1.3-1.6l1-11.4C5.5 1 6.2.5 7 .5l8.2.7c.8.1 1.3.8 1.3 1.6l-1 11.4c-.1.8-.8 1.4-1.6 1.3z" stroke-linecap="round" stroke-linejoin="round" stroke="#0084FF"></path></g></svg>
    <svg style="position: relative;bottom: 13px;margin-right: 5px;" height="20px" width="20px" viewBox="0 0 17 16" x="0px" y="0px"><g fill-rule="evenodd"><circle cx="5.5" cy="5.5" fill="none" r="1"></circle><circle cx="11.5" cy="4.5" fill="none" r="1"></circle><path d="M5.3 9c-.2.1-.4.4-.3.7.4 1.1 1.2 1.9 2.3 2.3h.2c.2 0 .4-.1.5-.3.1-.3 0-.5-.3-.6-.8-.4-1.4-1-1.7-1.8-.1-.2-.4-.4-.7-.3z" fill="none"></path><path d="M10.4 13.1c0 .9-.4 1.6-.9 2.2 4.1-1.1 6.8-5.1 6.5-9.3-.4.6-1 1.1-1.8 1.5-2 1-3.7 3.6-3.8 5.6z" fill="#0084FF"></path><path d="M2.5 13.4c.1.8.6 1.6 1.3 2 .5.4 1.2.6 1.8.6h.6l.4-.1c1.6-.4 2.6-1.5 2.7-2.9.1-2.4 2.1-5.4 4.5-6.6 1.3-.7 1.9-1.6 1.9-2.8l-.2-.9c-.1-.8-.6-1.6-1.3-2-.7-.5-1.5-.7-2.4-.5L3.6 1.5C1.9 1.8.7 3.4 1 5.2l1.5 8.2zm9-8.9c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1zm-3.57 6.662c.3.1.4.4.3.6-.1.3-.3.4-.5.4h-.2c-1-.4-1.9-1.3-2.3-2.3-.1-.3.1-.6.3-.7.3-.1.5 0 .6.3.4.8 1 1.4 1.8 1.7zM5.5 5.5c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1z" fill-rule="nonzero" fill="#0084FF"></path></g></svg>
<svg style="position: relative;bottom: 13px;margin-right: 5px;" height="20px" width="20px" viewBox="0 0 16 16" x="0px" y="0px"><path d="M.783 12.705c.4.8 1.017 1.206 1.817 1.606 0 0 1.3.594 2.5.694 1 .1 1.9.1 2.9.1s1.9 0 2.9-.1 1.679-.294 2.479-.694c.8-.4 1.157-.906 1.557-1.706.018 0 .4-1.405.5-2.505.1-1.2.1-3 0-4.3-.1-1.1-.073-1.976-.473-2.676-.4-.8-.863-1.408-1.763-1.808-.6-.3-1.2-.3-2.4-.4-1.8-.1-3.8-.1-5.7 0-1 .1-1.7.1-2.5.5s-1.417 1.1-1.817 1.9c0 0-.4 1.484-.5 2.584-.1 1.2-.1 3 0 4.3.1 1 .2 1.705.5 2.505zm10.498-8.274h2.3c.4 0 .769.196.769.696 0 .5-.247.68-.747.68l-1.793.02.022 1.412 1.252-.02c.4 0 .835.204.835.704s-.442.696-.842.696H11.82l-.045 2.139c0 .4-.194.8-.694.8-.5 0-.7-.3-.7-.8l-.031-5.631c0-.4.43-.696.93-.696zm-3.285.771c0-.5.3-.8.8-.8s.8.3.8.8l-.037 5.579c0 .4-.3.8-.8.8s-.8-.4-.8-.8l.037-5.579zm-3.192-.825c.7 0 1.307.183 1.807.683.3.3.4.7.1 1-.2.4-.7.4-1 .1-.2-.1-.5-.3-.9-.3-1 0-2.011.84-2.011 2.14 0 1.3.795 2.227 1.695 2.227.4 0 .805.073 1.105-.127V8.6c0-.4.3-.8.8-.8s.8.3.8.8v1.8c0 .2.037.071-.063.271-.7.7-1.57.991-2.47.991C2.868 11.662 1.3 10.2 1.3 8s1.704-3.623 3.504-3.623z" fill-rule="nonzero" fill="#0084FF"></path></svg>
</div>
<form method="POST" id="formSendMsg" onsubmit="return false;" style="display: inline;">
<textarea onkeyup="funcShowSend()" id="myarea2" placeholder="Aa" style="display:inline-block;border:none;outline: none;resize: none;overflow: auto;border-radius: 24px;width: 50%;height: 37px;margin-left: 0px;margin-top: 0px;padding-top: 7px;background-color: #f0f2f5;padding-left: 15px;"></textarea> 
	<button type="submit" id="likebutton" onclick="sendLike()" style="outline: none;border: none;background-color: white;">
	<svg height="20" width="20" viewBox="0 0 16 16" style="position: relative;bottom: 13px;margin-left: 4px;"><path d="M16,9.1c0-0.8-0.3-1.1-0.6-1.3c0.2-0.3,0.3-0.7,0.3-1.2c0-1-0.8-1.7-2.1-1.7h-3.1c0.1-0.5,0.2-1.3,0.2-1.8 c0-1.1-0.3-2.4-1.2-3C9.3,0.1,9,0,8.7,0C8.1,0,7.7,0.2,7.6,0.4C7.5,0.5,7.5,0.6,7.5,0.7L7.6,3c0,0.2,0,0.4-0.1,0.5L5.7,6.6 c0,0-0.1,0.1-0.1,0.1l0,0l0,0L5.3,6.8C5.1,7,5,7.2,5,7.4v6.1c0,0.2,0.1,0.4,0.2,0.5c0.1,0.1,1,1,2,1h5.2c0.9,0,1.4-0.3,1.8-0.9 c0.3-0.5,0.2-1,0.1-1.4c0.5-0.2,0.9-0.5,1.1-1.2c0.1-0.4,0-0.8-0.2-1C15.6,10.3,16,9.9,16,9.1z" fill="#0084FF"></path><path d="M3.3,6H0.7C0.3,6,0,6.3,0,6.7v8.5C0,15.7,0.3,16,0.7,16h2.5C3.7,16,4,15.7,4,15.3V6.7C4,6.3,3.7,6,3.3,6z" fill="#0084FF"></path></svg></button>
	<button type="submit" id="sendbutton" onclick="sendMsg()" style="outline:none;display: none;border: none;background-color: white;">
	<svg style="position: relative;bottom: 13px;margin-left: 4px;" height="20px" width="20px" viewBox="0 0 24 24"><path d="M16.6915026,12.4744748 L3.50612381,13.2599618 C3.19218622,13.2599618 3.03521743,13.4170592 3.03521743,13.5741566 L1.15159189,20.0151496 C0.8376543,20.8006365 0.99,21.89 1.77946707,22.52 C2.41,22.99 3.50612381,23.1 4.13399899,22.8429026 L21.714504,14.0454487 C22.6563168,13.5741566 23.1272231,12.6315722 22.9702544,11.6889879 C22.8132856,11.0605983 22.3423792,10.4322088 21.714504,10.118014 L4.13399899,1.16346272 C3.34915502,0.9 2.40734225,1.00636533 1.77946707,1.4776575 C0.994623095,2.10604706 0.8376543,3.0486314 1.15159189,3.99121575 L3.03521743,10.4322088 C3.03521743,10.5893061 3.34915502,10.7464035 3.50612381,10.7464035 L16.6915026,11.5318905 C16.6915026,11.5318905 17.1624089,11.5318905 17.1624089,12.0031827 C17.1624089,12.4744748 16.6915026,12.4744748 16.6915026,12.4744748 Z" fill-rule="evenodd" stroke="none" fill="#0084FF"></path></svg></button>
	</form>
    </td>
  </tr>
</tbody>
</table>
<script type="text/javascript">
function sendLike() {

	// Gửi dữ liệu
	$.ajax({
		url : 'sendmsg.php', // đường dẫn file xử lý
		type : 'POST', // phương thức
		// dữ liệu
		data : {
			body_msg : '(y)'
		// thực thi khi gửi dữ liệu thành công
		}, success : function() {
			$('#formSendMsg textarea[id="myarea2"]').val(''); // làm trống thanh trò chuyện
		}
	});
	setTimeout(updateScroll, 1000);
}

	function updateScroll(){
    var element = document.getElementById("tabled");
    element.scrollTop = element.scrollHeight;
}
setTimeout(updateScroll, 1000);

function funcShowSend(){
	if ($("#myarea2").val().length != 0) {
    document.getElementById("likebutton").style.display = "none";
    document.getElementById("sendbutton").style.display = "inline";
	} else {
	document.getElementById("likebutton").style.display = "inline";
    document.getElementById("sendbutton").style.display = "none";
	}
}

	// JavaScript
function jsUpdateSize(){
    // Get the dimensions of the viewport
    var width = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth;

    document.getElementById("myarea2").style.width = width - 538 + "px"
};
window.onload = jsUpdateSize;       // When the page first loads
window.onresize = jsUpdateSize;     // When the browser changes size

// jQuery
function jqUpdateSize(){
    // Get the dimensions of the viewport
    var width = $(window).width();

    document.getElementById("myarea2").style.width = width - 538 + "px"
};
$(document).ready(jqUpdateSize);    // When the page first loads
$(window).resize(jqUpdateSize);     // When the browser changes size

// JavaScript
function jsUpdateSize(){
    // Get the dimensions of the viewport
    var width2 = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth;

    var height2 = window.innerHeight ||
                document.documentElement.clientHeight ||
                document.body.clientHeight;

    document.getElementById("tabled").style.width = width2 - 345 + "px"
    document.getElementById("tabled").style.height = height2 - 184 + "px"
};
window.onload = jsUpdateSize2;       // When the page first loads
window.onresize = jsUpdateSize2;     // When the browser changes size

// jQuery
function jqUpdateSize2(){
    // Get the dimensions of the viewport
    var width2 = $(window).width();
    var height2 = $(window).height();

    document.getElementById("tabled").style.width = width2 - 345 + "px"
    document.getElementById("tabled").style.height = height2 - 184 + "px"
};
$(document).ready(jqUpdateSize2);    // When the page first loads
$(window).resize(jqUpdateSize2);     // When the browser changes size
    		</script>
</div>
</div>
<script type="text/javascript">
	var firstFocus = true;
$('#myarea').focus(function() {
    if (firstFocus) {
        $('#myarea').html('');
        firstFocus = false;
    }
});
$(document).click(function(){
  $('#myarea').html('<span style="color: #65676b" id="span"><i class="fas fa-search"></i> Tìm kiếm</span>');
  firstFocus = true;
});

/* Clicks within the dropdown won't make
   it past the dropdown itself */
$("#myarea").click(function(e){
 e.stopPropagation();
});
</script>
<!-- Kết nối các file js -->
	<script src="js/autoload.js"></script>
	<script src="js/sendmsg.js"></script>