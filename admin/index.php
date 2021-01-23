<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login/index.php");
    exit;
}
?>
<head>
	  <link rel="stylesheet" href="/assets/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700">
</head>




<head>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
	<!-- Trumbowyg -->
<script src="/trumbowyg/dist/trumbowyg.min.js"></script>
<link rel="stylesheet" href="/trumbowyg/dist/ui/trumbowyg.min.css">



</head>
<body style="
    margin-left: 20px;
    margin-right: 20px;
">
<style type="text/css">
	@media only screen and (max-width: 479px){
    #con { width: 90%; }
}
</style>
<div class="content" id="con" style="
   padding-top: 20px;
    max-width: 800px; width: 100%;
    margin: 0 auto;
    position: relative;
">
<p>Chào mừng, Dương Tùng Anh!</p>
<h1>Công cụ quản trị viên</h1>

<a href="time.php"><h3>Đăng thời khoá biểu mới</h3></a>
<a href="post.php"><h3>Đăng thông báo mới</h3></a>
<a href="post.php"><h3>Cập nhật thông báo có sẵn</h3></a>
<a href="post.php"><h3>Xoá thông báo</h3></a>
<a href="update.php"><h3>Cập nhật bài tập về nhà có sẵn</h3></a>
<a href="/logout.php"><h3>Đăng xuất khỏi tài khoản</h3></a>
<a href="/"><h3>< Quay lại trang chủ</h3></a>
			</body>

			