<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login/index.php");
    exit;
}
?>
<?php 
$title = 'C4K60 - Admin Panel';
require $_SERVER['DOCUMENT_ROOT'] . '/include/head.php';
 ?>



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
 <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/navbar.php';
 ?>
<style type="text/css">
	@media only screen and (max-width: 479px){
    #con { width: 90%; }
}
</style>
<div class="content" id="con" style="
   padding-top: 20px;
    max-width: 800px; width: 100%;
    margin: 0 auto;
    position: relative;top: 60px;
">

<p>Chào mừng, Dương Tùng Anh!</p>
<h2>Công cụ quản trị viên</h2>

<a href="time.php"><h4>Đăng thời khoá biểu mới</h4></a>
<a href="post.php"><h4>Đăng thông báo mới</h4></a>
<a href="post.php"><h4>Cập nhật thông báo có sẵn</h4></a>
<a href="post.php"><h4>Xoá thông báo</h4></a>
<a href="update.php"><h4>Cập nhật bài tập về nhà có sẵn</h4></a>
<a href="logout.php"><h4>Đăng xuất khỏi tài khoản</h4></a>

<br>
			</body>

			 <?php 
require $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
 ?>